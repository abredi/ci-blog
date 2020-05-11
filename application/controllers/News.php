<?php
class News extends CI_Controller
{
        public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model');
                $this->load->helper('url_helper');
        }

        public function slugs()
        {
                print_r($this->news_model->slugs());
        }

        public function index()
        {
                $data['news'] = $this->news_model->get_news();
                $data['brand'] = 'Crescent';
                $data['page'] = 'Addis News';

                $this->load->view('templates/header', $data);
                $this->load->view('news/index', $data);
                $this->load->view('templates/footer');
        }

        public function view($slug = NULL)
        {
                $data['brand'] = 'Crescent';
                $data['news_item'] = $this->news_model->get_news($slug);

                if (empty($data['news_item'])) {
                        show_404();
                }

                $data['title'] = $data['news_item']['title'];

                $this->load->view('templates/header', $data);
                $this->load->view('news/view', $data);
                $this->load->view('templates/footer');
        }

        public function create()
        {
                if (! isset($_SESSION['is_logged_in'])) {
                        $this->session->set_flashdata(
                                'alert',
                                [
                                        'type' => 'danger',
                                        'msg' => "Please Login First"
                                ]
                        );
                       redirect('auth/login');
                }
                
                $this->load->helper('form');
                $this->load->library('form_validation');

                $data['page'] = 'Create A News';
                $data['brand'] = 'Crescent';
                $this->form_validation->set_rules('title', 'Title', 'trim|required|max_length[128]');
                $this->form_validation->set_rules('text', 'Text', 'trim|required|max_length[1000]');

                $news = isset($_SESSION['edit_data']) ? $_SESSION['edit_data'] : [];

                if ($this->form_validation->run() === FALSE) {
                        $this->load->view('templates/header', $data);
                        $this->load->view('news/create', $news);
                        $this->load->view('templates/footer');
                } else {
                        $this->news_model->set_news();
                        $action = (count($news) > 0) ? 'updated' : 'added';
                        $this->session->set_flashdata(
                                'alert',
                                [
                                        'type' => 'success',
                                        'msg' => "{$this->input->post('title')} has been {$action} successfully"
                                ]
                        );
                        redirect('news');
                }
        }

        public function edit($id)
        {
                $news = $this->news_model->getNewsById($id);
                if ($news) {
                        $this->session->set_userdata('edit_data', $news);
                        $this->create();
                } else {
                        redirect('news', 'refresh');
                }
        }

        public function remove($id)
        {
                if (! isset($_SESSION['is_logged_in'])) {
                        $this->session->set_flashdata(
                                'alert',
                                [
                                        'type' => 'danger',
                                        'msg' => "Please Login First"
                                ]
                        );
                       redirect('auth/login');
                }
                if (is_numeric($id)) {
                        $this->news_model->delete($id);
                }

                $this->session->set_flashdata(
                        'alert',
                        [
                                'type' => 'danger',
                                'msg' => "The news {$id} has been removed successfully"
                        ]
                );

                redirect('news');
        }

        
}
