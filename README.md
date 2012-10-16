#CI_SImple_Template

My goal with this, was to make a really simple basic template system for those who really don't want to learn complicated
templating libraries. You really just set variables, and then give it a view. You can set your template in your config
or set it manually in the page. Then in your template, you just write it in normal PHP and make sure you pass in those
PHP variables you need from the controller. I also wanted some basic CSS and JS including so I created a way to add
them from the controller, and then print them out using helpers.

##Example

> $this->load->spark('CI_Simple_Template/0.0.1');
> $this->ci_simple_template->set('title', 'Insert a cool title here');
> $this->ci_simple_template->template('my_template');
> $this->ci_simple_template->render('my_view');

You can also skip setting the template, by going to your config/paths.php file and putting your template name there.