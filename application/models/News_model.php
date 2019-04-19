<?php
class News_model extends CI_Model
{
        public function __construct()
        {
                $this->load->database();
        }

        public function get_news($slug = FALSE)
        {
                if ($slug === FALSE) {
                        $query = $this->db->get('news');
                        return $query->result_array();
                }

                $query = $this->db->get_where('news', array('slug' => $slug));
                return $query->row_array();
        }

        public function set_news()
        {
                $this->load->helper('url');

                $slug = url_title($this->input->post('title'), 'dash', TRUE);

                $data = array(
                        'title' => $this->input->post('title'),
                        'slug' => $slug,
                        'text' => $this->input->post('text')
                );

                if (isset($_SESSION['edit_data'])) {
                        $this->db->update('news', $data, array('id' => $_SESSION['edit_data']['id']));
                        unset($_SESSION['edit_data']);
                        return;
                }
 
                return $this->db->insert('news', $data);
        }

        public function delete($id)
        {
                $this->db->delete('news', ['id' => $id]);
        }

        public function getNewsById($id)
        {
               return $this->db->get_where('news', ['id' => $id])->row_array();
        }

        public function slugs()
        {
                return $this->db->select('slug');
        }


}
