
# Premium Laravel Template

This project is a Laravel-based AI chatbot application with user authentication, Gemini API integration, and a professional black & white theme for the frontend. It allows users to interact with an AI model (Gemini) to generate responses. This guide provides step-by-step instructions on how to set up and deploy this application.

## Features
- User authentication (Login, Register)
- Chat interface for users to interact with the chatbot
- Responsive layout with a modern, professional design
- Integration with Gemini API to generate chatbot responses
- MySQL database for storing user data, chats, and messages

## Requirements
- PHP 8.1 or higher
- Composer
- Laravel 12.x
- MySQL (or another compatible database)

## Installation Guide

### Step 1: Clone the Repository
Clone the repository to your local machine:
```bash
git clone https://github.com/Ahmadjamil888/PREMIUM-LARAVEL-template.git
cd project
```

### Step 2: Install Dependencies
Run the following command to install the project dependencies using Composer:
```bash
composer install
```

### Step 3: Set Up the Environment File
Copy the `.env.example` file to `.env`:
```bash
cp .env.example .env
```

### Step 4: Configure Your `.env` File
Open the `.env` file and make the following edits:

#### Set Up Database
- Configure your MySQL database connection in the `.env` file.
- Example:

```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_database_username
DB_PASSWORD=your_database_password
```

Make sure your MySQL server is running and the database you specify exists. If not, create it manually.

#### Set Up Gemini API Key
- To use the Gemini API, you need to add your API key.
- Example:
```dotenv
GEMINI_API_KEY=your_gemini_api_key_here
```

Ensure you replace `your_gemini_api_key_here` with the actual API key you received from Gemini API.

### Step 5: Generate Application Key
Run the following command to generate the application key:
```bash
php artisan key:generate
```

### Step 6: Run Migrations
Create the necessary database tables by running migrations:
```bash
php artisan migrate
```

### Step 7: Set Permissions (If Needed)
If you're using Linux or macOS, you may need to set the correct permissions for storage and cache directories:
```bash
chmod -R 775 storage
chmod -R 775 bootstrap/cache
```

### Step 8: Serve the Application
Now that everything is set up, you can start the Laravel development server:
```bash
php artisan serve
```

By default, the app will be available at `http://127.0.0.1:8000`.

### Step 9: Testing Authentication
To test the authentication, go to the following URLs:
- **Login:** `/login`
- **Register:** `/register`

Use these routes to register a new user or log in with existing credentials.

### Step 10: Accessing the Chat Interface
Once logged in, you will be redirected to the dashboard, where you can:
- Start a new chat by clicking the "New Chat" button.
- View existing chats and interact with the AI assistant.

### Step 11: Admin Routes (Optional)
If you want to add additional admin routes or actions, you can modify the routes in `web.php` and the corresponding controllers.

## Customizing the Template

### Frontend Customization
- The chatbot UI is styled using custom CSS in the `resources/css` directory. You can adjust the colors, typography, layout, and other styles to match your branding.
- Modify the HTML structure and CSS as needed to enhance the UI.

### Adding More Features
- You can extend the `ChatController` to integrate additional AI models or support more complex user inputs.
- If you wish to add more endpoints or functionality, update the routes in `web.php` and the corresponding controller methods.

## Deployment

### Step 1: Set Up the Production Environment
Make sure to configure your production environment by updating the `.env` file for your live database and API credentials.

### Step 2: Deploy to a Web Server
Deploy your application to a web server like Apache or Nginx. If you're using shared hosting, ensure that PHP 8.1+ is supported, and your server meets the requirements for running Laravel.

### Step 3: Set File Permissions
On production servers, make sure that the `storage` and `bootstrap/cache` directories have the correct permissions:
```bash
chmod -R 775 storage
chmod -R 775 bootstrap/cache
```

### Step 4: Configure SSL
For secure communication, it's recommended to set up an SSL certificate (HTTPS) for your production environment.

## Troubleshooting

### Issue: "Gemini API key is missing or invalid"
Ensure you correctly set the `GEMINI_API_KEY` in the `.env` file. Double-check that your key is correct.

### Issue: "Database connection error"
Make sure your database configuration in the `.env` file is correct. You may need to test your MySQL connection separately using a tool like phpMyAdmin or MySQL Workbench.

### Issue: "500 Internal Server Error"
Check the Laravel logs located at `storage/logs/laravel.log` for more detailed error messages. Run `php artisan config:clear` to clear the configuration cache.

## Contributing

If you'd like to contribute to this project, feel free to fork the repository, make changes, and create a pull request. Ensure that your code adheres to the Laravel coding standards and passes all tests.

## License

This project is open-source and available under the MIT License. See the LICENSE file for more details.

---

Thank you for using this AI Chatbot Laravel Project. Happy coding!
