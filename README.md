#CI_Simple_Template

My goal with this, was to make a really simple basic template system for those who really don't want to learn complicated
templating libraries. You really just set variables, and then give it a view. You can set your template in your config
or set it manually in the page. Then in your template, you just write it in normal PHP and make sure you pass in those
PHP variables you need from the controller. I also wanted some basic CSS and JS including so I created a way to add
them from the controller, and then print them out using helpers.

##Example Controller

    <?php

    class Example extends CI_Controller()
    {
        $data = array();
    
        $this->load->spark('CI_Simple_Template/0.0.1');
        $this->ci_simple_template->set('title', 'Insert a cool title here');
        $this->ci_simple_template->template('my_template');
        $this->ci_simple_template->render('my_view', $data);
    }

You can also skip setting the template, by going to your config/paths.php file and putting your template name there.
You can pass page specific variables to your view by creating a data variable and passing it in as a second argument
to the render method.

##Example Template (my_template.php)

    <html>
        <head>
            <title><?php echo $title ?></title>
            <?php load_css() ?>
        </head>
        <body>
            <?php echo $contents ?>

            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
            <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.0/jquery-ui.min.js"></script>
            <?php load_js() ?>
        </body>
    </html>

Notice that we load template wide JS directly in the template. The load_css and load_js are meant for page specific JS.

##Example View (my_view.php)

    <p>Hello World!</p>

Using the controller above, this will load this view into the contents variable. Then it will be echo'd in the template.