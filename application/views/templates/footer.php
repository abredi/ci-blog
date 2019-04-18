                
                </div>
                <nav class="navbar fixed-bottom navbar-light bg-light">
                        <em>&copy; <?php echo date('Y'); ?></em> &nbsp;
                       <span>
                           Page rendered in
                                <strong>{elapsed_time}</strong> seconds.     
                       </span>
                       <span>
                       <?php echo (ENVIRONMENT === 'development') ?
                                        'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?>
                       </span>
                </nav>
        </body>
</html>