# CMN6204 - Wordpress Assignment 2

Hi all! So far we have learned to:

- Create and administer a Wordpress website.
- Edit and insert content.
- Install and administer plugins and store templates.
- Understand WP fundamentals 
- Create menus, widgets and basic templates.
- Split and integrate a HTML file into a real template.
- Implement custom template functions via functions.php file.
- Create custom functions which hook to WP events system.
- Integrate WP menu administration into templates via menu zones.
- Create custom templates and dedicated page templates.

At this point you are expected to be able to recreate all of this on your own.

During this assignment, you will put that knowledge into practice, and it is expected to take you at least 2-3 hours to finish everything so don't let that demotivate you. At the end of the assignment, you will have a repository with a working Wordpress installation, ready for further work in class.

*Yes, all the steps are mandatory.*

In the following two weeks, we will be building a simple portfolio website, with a very basic and ancient-looking template. The goal of this assignment is to practice building queries a lot, and recap all that we have learned so far.

# Deadline

The project is mandatory, as we will use it on lectures. All tasks are mandatory. The deadline is next Wednesday at 23:59.

On each lecture we will be dwelling deeper and deeper into code.
This means that you MUST understand these homework assignments as an integral part of your learning and work, and not as an additional or bonus task. If you miss the opportunity to finish a week's homework, it will be really hard for you to follow others on next class. If you have any questions during the way (and you should), please ask on Slack, in the #code channel.

Again: Please do not fail to submit the project on time, as it will prevent you from actively working on the lecture and understanding the future code.

## Week 3

- Fork this repository and clone the project to your computer.
- Set up the project in such a way that it responds to the domain name `portfolio.dev`.
- Download and install a brand new Wordpress installation. The domain name MUST be `portfolio.dev`. The website should be named `My Portfolio`. Database name should be `wp2_portfolio`, Administrator credentials should be `admin | password`.
- Update WP to the latest version, and do not forget to commit this as a single commit.
- Install ACF plugin from the store, and do not forget to commit this as a single commit.
- The website should contain 4 pages named: `Welcome`, `Contact`, `My Work`, `About Me`
- The website posts section should contain 3 Project Categories of your choice. Make it something work related, for example "Websites", "UX Design", "Applications", "Cloud Services".
- You should create 9 projects and spread them evenly into these categories. Project names must make sense. Project text can be left lorem ipsum, but all projects must contain the following: A screenshot, Client company name, completed date.
- All posts must be properly tagged. Every post needs minimum 2 tags with the names of technologies used in the project. "PHP", "Wordpress", "Photoshop", "JavaScript", "NodeJS" ...
- "About Me" page needs to contain a pretty portrait of youselves, and at least 4 paragraphs of any text or lorem ipsum.
- Welcome page should contain: "A simple welcome statement paragraph. Not lorem ipsum.", and a cute large welcome image. + "3 imaginary quotes from satisfied clients, with small-ish photos of these people." This page should also be set as the static front page in settings.
- Contact page should include some contact information, as well as a link to some nice google maps location. Also a textual representation of this address where your imaginary HQ is located.
- My Work page should be left empty for now.

--- Take a breath... Ok... Go... ---
- Remember to `git commit` often, and to write propper messages! I expect the following to be AT LEAST 5 commits.
- Let's practice some basic RegExes now. Create a gitignore file where you ignore `wp-config.php`, `node_modules`, windows, linux and macOS hidden files, as well as `.htaccess`. These are all the regex rules you need to follow. 
	1. Any folder named `node_modules` anywhere in project.
	2. `wp_config.php` in the project root.
	3. All files named exactly `.htaccess`.
	4. All `.DS_Store` files in all directories.
	5. `Thumbs.db` and `Desktop.ini` and `.lnk` also in all directories.
	6. Any log files (ending with `.log`) in all directories.
- Create a brand new empty theme named `Basic ACF Portfolio Theme`. The index.php file should contain only the line "This is index.php template" for now.
- For now, while under development, the theme should contain SAE logo as a screenshot.
- You were given an ugly HTML template by the lazy frontend developer, which you can find within the folder named `assets-week-3` in the root of the project. Move this folder inside your theme, so that we do not have any non essential items in the root. This move is also temporary, as we will be eventually deleteing the whole folder. Because of this temporary nature of this folder, you do not have to insert a "Scilence is golden" file.
- Use our future front page HTML template (`main-page.html`) to create a header and footer template files. Implement those new files in the index template as we did multiple times in class and in homework so far.
- Implement a simple custom title function named `custom_title` which will output the title in the same way as we did in class: `Site Title ~ Site Description`.
- Find a way to add the CURRENT PAGE title to that function. For example: `Contact Page | Site Title ~ Site Description`.
- Replace hardcoded site title at selector location `.navbar .navbar-brand` with the real Site Title.
- Define a new menu zone in `functions.php` like we did in the class, named `main-menu`. Create the appropriate menu in Admin Panel, and assign it to this zone. Create menu items for Home, My Work, About me and Contact pages. Implement this menu in our theme header like we did in class.
- Find a way to set some pretty and more descriptive names for all four menu items in the Admin Panel. For example instead of "Contact", let it be "Hire me!".
- Create a separate template for the static front page we created. The HTML used should be extracted from the `main-page.html`. The template MUST implement header and footer templates we created earlier, like we did in class.
- There is a div on selector location `.container .row .col-lg-6` Find it, and empty its contents. Instead of those paragraphs, output the page content that you can set via Admin editor. Hint: We did this in class, remember the `the_post()` directive for loading the current page info? Leave the rest of the page like it is for now.
- Create a basic `page.php` template from HTML `blank-page.html`. Like in the previous template, you must replace the contents of `.content` div with the real page content by using `the_content()` method. This is the page fallback template, so we do not have to specially assign it to any pages. Verify that it works for all pages except Home, by default.
 Use the HTML from `about.html` page to create a custom page template named "About us Template". Replace content with real content at location `.container .row .col-lg-6`.
- Use the HTML from `my-work.html` page to create a custom page template named "Portfolio expose Template". Leave it as is, we will edit it in class.
 Do the same for contact page. The custom template should be named `Contact Page with map`. No need to echo page content for now.
- Do the same for 404 page. No need to echo page content, since it is a 404 page.
- Do the same for `single-category.html` page. No need to edit anything. This template file must be named exactly `category.php`. We will explain this further in class. No need to edit the file for now.

- Do the same for `portfolio-item.html` and name the template file exactly `single.php`. We will explain this further in class. Replace content with real content.




- Bonus task: (NOT mandatory) Find a way to shorten content to a length of 180 character excerpt. Write a custom function that does this.
- MANDATORY: Verify that everything works as specified.
- Open up a pull request, and select me (`markomitranic`) as the review delegate in the right sidebar menu on the pull request page.

## Week 4

- Hey! Take it easy, it takes time to write this stuff.

Rejoice, Hooray!
