
# Point of Sale Web Application

This Point of Sale (POS) web application is built using PHP, JavaScript, CSS, and HTML. The application provides a comprehensive solution for managing sales, staff, and products in a retail environment.

## Project Structure

```
pos-web-app/
├── css/
│   └── shopping cart, payment with styles and js added
├── fonts/
│   └── Add files via upload
├── js/
│   └── shopping cart, payment with styles and js added
├── 404.html
│   └── updates, creations on front-end design
├── blank.html
│   └── updates, creations on front-end design
├── forgot-password.php
│   └── formatting all the pages
├── history.php
│   └── checking some final codes
├── index.php
│   └── checking some final codes
├── login.php
│   └── update on queries and trying to fix image
├── newSale.php
│   └── checking some final codes
├── payment.php
│   └── update on queries and trying to fix image
├── proceed.php
│   └── checking some final codes
├── products.php
│   └── checking some final codes
├── profile.php
│   └── update on queries and trying to fix image
├── retail-dashboard.php
│   └── checking some final codes
├── sales-in-progress.php
│   └── checking some final codes
├── setup.php
│   └── update on queries and trying to fix image
├── staff.php
│   └── checking some final codes
├── updateProducts.php
│   └── checking some final codes
├── updateStaff.php
│   └── checking some final codes
```

## Features

- **Responsive Design:** Utilizes CSS and JavaScript for a responsive and interactive user experience.
- **User Management:** Includes login, profile management, and password recovery functionality.
- **Sales Management:** Supports new sales creation, viewing sales history, and managing sales in progress.
- **Product Management:** Allows adding, updating, and viewing products.
- **Staff Management:** Facilitates adding, updating, and viewing staff members.
- **Dashboard:** Provides an overview of retail operations and sales metrics.

## Getting Started

### Prerequisites

- Web server with PHP support (e.g., Apache, Nginx)
- MySQL or another compatible database server

### Installation

1. **Clone the Repository:**
    ```bash
    git clone https://github.com/yourusername/pos-web-app.git
    cd pos-web-app
    ```

2. **Setup the Database:**
    - Create a new database for the application.
    - Import the provided SQL file to set up the database schema and initial data.

3. **Configure the Application:**
    - Update the database configuration in the `setup.php` file with your database credentials.

4. **Run the Application:**
    - Deploy the application on your web server.
    - Open `index.php` in your web browser to access the application.

## Usage

1. **Login:**
    - Access the login page via `login.php`.
    - Enter your credentials to log in.

2. **Manage Sales:**
    - Create new sales via `newSale.php`.
    - View sales history via `history.php`.
    - Manage sales in progress via `sales-in-progress.php`.

3. **Manage Products:**
    - Add new products via `newart.html`.
    - Update product information via `updateProducts.php`.
    - View all products via `products.php`.

4. **Manage Staff:**
    - Add new staff via `newartist.html`.
    - Update staff information via `updateStaff.php`.
    - View all staff members via `staff.php`.

5. **Profile Management:**
    - View and update your profile via `profile.php`.

6. **Dashboard:**
    - Access the retail dashboard via `retail-dashboard.php` for an overview of sales and operations.

## Contributing

If you would like to contribute to this project, please fork the repository and submit a pull request with your changes. Ensure that your code follows the existing style and includes appropriate tests.

