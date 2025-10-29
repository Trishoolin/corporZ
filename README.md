
# CorporZ-Open Source-Dynamic Website in HTML,PHP,MySQL & CodeIgniter-v3 Framework with Grocery CRUD.

A completely Open Source Responsive Dynamic website using HTML, CSS, PHP Codeigniter, Grocery CRUD, MySQL, Creating multiple web dynamic pages like contact, about etc. 


![Logo](https://github.com/swamilax/corporZ/blob/main/assets/frontend/images/logo.png)


# Contributor Team! 👋

## List
⚡️ @CodeWife (facebook.com/codewife) Main Devloper

👩‍💻 @swamilax = (https://github.com/swamilax/) - Repository Manager, Front-end.

🧠 @agoenks29D = (https://github.com/agoenks29D) (Active Contributer)

💬 @virdiggg   = (https://github.com/virdiggg)   (Active Contributer)

📫 You can Feature Here Become Contributor

😄 You can Feature Here Become Contributor



## Help Needed - To Upgrade Codeigniter V3 to v4.3.0

Please Join The Telegram Group 

Become a Contributor & Feature on Read.md
Join Telegram Group- For Contribution & Discussion 

https://t.me/+VdOFk0P-K2cxYmQ1
## Roadmap
 PLEASE CHECK AT lAST


Please Suggest More Idea... Welcome..



## Current Features of The Script

- Dynamic Home Page Slider With Text.
- Create Dynamic Multiple Pages like (Services, About Us.. etc.)
- Dynamic Blogs.
- Dynamic Testimonials.
- Dynamic Partner With Us Logo Slider in Homepage.
- Dynamic Gallery.
- Dynamic Logo & Text In Header & Footer.
- Dynamic Social Media Links Ex: Facebook, YouTube etc.
- Responsive Design.
- Admin Panel.



## Video Demo

https://www.youtube.com/watch?v=JuPQsPgcKwU&t=3s


## Installation

To install Follow STEPS Like

    
## Run Locally

Clone the project

```bash
  git clone https://github.com/swamilax/corporZ.git
```

Go to the project directory

```bash
  cd corporZ
```

Add Database From "DB folder" to phpmyadmin

(Note :- Use PHP 7.4 , Otherise It gives error)


GoTo C://xammp/htdocs/corporZ/application/config/ 
&  Edit File "config.php" 

Line No. 26 as your Base URL (Change it as per your configrations), 

Edit File "database.php" for Database as per your details

```bash
 'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'corporz',
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
```
Start the XAMPP server.


& Then GoTo
 http://yourparordomain.com/admin
or
http://localhost/corporZ/admin
or
http://localhost/corporZ/auth

Use Credentials

Email -    
```bash
admin@admin.com
```
Password is 
```bash
password
```
## Contributing

Contributions are always welcome!

See `Become a Contributor Section` for ways to get started.

Please adhere to this project's `code of conduct`.


## Become a Contributor
Become a Contributor & Feature on Read.md
Join Telegram Group- For Contribution & Discussion 
https://t.me/+VdOFk0P-K2cxYmQ1

## Screenshots

![Homepage Screenshot](https://github.com/swamilax/corporZ/blob/main/screenshots-corporz/home.png)

![Gallery Screenshot](https://github.com/swamilax/corporZ/blob/main/screenshots-corporz/gallery.png)

![Contact-us Screenshot](https://github.com/swamilax/corporZ/blob/main/screenshots-corporz/contact-us.png)

![About-us Screenshot](https://github.com/swamilax/corporZ/blob/main/screenshots-corporz/about-us.png)

![Admin-Dashboard Screenshot](https://github.com/swamilax/corporZ/blob/main/screenshots-corporz/admin-dashboard.png)


## Original Author's Detail

- [@Codewife](https://www.github.com/Codewife)
- [Youtube-Demo Video](https://www.youtube.com/watch?v=JuPQsPgcKwU)
- [Facebook](https://facebook.com/codewife)
- [Twitter](https://twitter.com/code_wife)
- [Website](codewife.com)
- [Youtube-Channel](https://www.youtube.com/@codewife/)


## Help Needed -
 ## Roadmap - here are several recommendations for improvement:

1. **Framework Upgrade (Critical)**:
   - The project is currently using CodeIgniter 3, which is outdated. As mentioned in your roadmap, upgrading to CodeIgniter 4 would bring significant improvements:
   - Better security features
   - Enhanced performance
   - Modern PHP features support
   - Improved dependency management with Composer
   - Better testing capabilities

2. **Security Improvements**:
   - Implement CSRF protection consistently
   - Add input validation in controllers
   - Implement proper XSS filtering
   - Use prepared statements for all database queries
   - Implement rate limiting for API endpoints
   - Add security headers

3. **Code Structure and Organization**:
   - Implement proper MVC separation (some controllers might be handling too much business logic)
   - Use dependency injection instead of direct object creation
   - Create service layers for business logic
   - Implement interfaces for better abstraction
   - Use constants for configuration values instead of magic strings

4. **Database Management**:
   - Implement proper database migrations for version control
   - Add database seeders for testing data
   - Optimize database queries
   - Add indexes for frequently accessed columns
   - Implement caching strategy

5. **Frontend Improvements**:
   - Implement a modern frontend build system (webpack/vite)
   - Minify and optimize CSS/JS files
   - Implement lazy loading for images
   - Add proper asset versioning
   - Implement progressive web app features
   - Use modern CSS frameworks or utilities like Tailwind CSS

6. **Performance Optimization**:
   - Implement caching (both server-side and browser)
   - Optimize asset delivery
   - Implement CDN for static assets
   - Add API response caching
   - Implement database query caching

7. **Authentication & Authorization**:
   - Enhance the Ion Auth implementation
   - Add role-based access control (RBAC)
   - Implement JWT for API authentication
   - Add two-factor authentication option
   - Implement proper password policies

8. **Testing**:
   - Add unit tests
   - Implement integration tests
   - Add end-to-end testing
   - Set up continuous integration
   - Implement automated testing pipelines

9. **Documentation**:
   - Add comprehensive API documentation
   - Document setup procedures
   - Add inline code documentation
   - Create user guides
   - Document database schema

10. **Modern Features**:
    - Implement RESTful API standards
    - Add WebSocket support for real-time features
    - Implement proper logging and monitoring
    - Add error tracking
    - Implement proper environment configuration

11. **Development Workflow**:
    - Set up proper Git workflow with branching strategy
    - Implement code review process
    - Add automated deployment pipeline
    - Set up development, staging, and production environments
    - Add proper debugging tools

12. **Dependencies**:
    - Update all third-party libraries to latest stable versions
    - Implement proper dependency management with Composer
    - Remove unused dependencies
    - Add security scanning for dependencies
