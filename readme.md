# Symfony Blog - Basic Features
This project is an example of a blog application developed using the Symfony framework. It includes the basic features required for a blog, such as a home page displaying the latest articles, a list of articles, user login functionality, and an administration interface with CRUD operations. The project utilizes Twig as the template engine for rendering views.

## Features
Home Page: Displays the latest articles on the home page, providing visitors with an overview of the most recent content.

* Article List: Provides a paginated list of articles, allowing users to browse through the available posts.

* User Authentication: Implements a login system to secure the administration area and restrict access to authorized users.

* Administration Interface: Offers an intuitive user interface for managing articles, including the ability to create, read, update, and delete (CRUD) articles. This interface simplifies content management tasks for blog administrators.

* Twig Templating Engine: Utilizes the Twig templating engine to separate presentation logic from application code, making it easier to create and maintain consistent and reusable templates.

## Dependencies
In addition to the Symfony framework, this project relies on the following library:

* CKEditor: Integration of CKEditor allows for rich text editing capabilities within the blog's article content. CKEditor enhances the user experience by providing a powerful and user-friendly editor for creating and formatting article text.


Customize and Extend
This project serves as a starting point for building your own blog application. You can customize and extend the functionality based on your specific requirements. Some possible enhancements include:

Adding additional features, such as comment functionality or user profiles.
Enhancing the frontend design by modifying the Twig templates and CSS styles.
Implementing additional CRUD operations for other entities, such as categories or tags.
Feel free to explore the Symfony documentation and the official CKEditor documentation for more information on how to leverage these technologies to further enhance your blog application.

Conclusion
With this Symfony blog application, you have a solid foundation for creating and managing a basic blog. By leveraging Symfony's powerful features, along with CKEditor for rich text editing, you can easily extend the application to suit your needs. Happy blogging!
## Getting Started
To get started with the blog application, follow these steps:

**1. Clone the repository:**

```bash
git clone <repository_url>
```

**2. Install the dependencies using Composer:**

```bash
composer install
```

**3. Configure the database connection in the .env file:**

dotenv .env
DATABASE_URL=mysql://your_database_user:your_database_password@your_database_host:your_database_port/your_database_name

**4. Create the required database tables by running the following command:**

```bash
php bin/console doctrine:migrations:migrate
```
**5. Start the development server:**

```bash
symfony serve
```
Open your browser and access the application at http://localhost:8000.


Install my-project with npm

```bash
  npm install my-project
  cd my-project
```
***For scss, don't forget :*** 

```bash
    npm run watch
```
