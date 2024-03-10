# FEMCODERS F5 -DELISANA ECOMMERCE 🥐🍪🍩<br>

Welcome to Delisana, your healthy baking web store. Whether you have an intolerance such as gluten or lactose, if you want sugar-free products or just want to indulge yourself without feeling guilty, we have everything you need, with native and top quality ingredients.

## 📋 Table of Contents

-   Project Overview
-   Backend Stack
-   Technologies
-   Installation Steps
-   API Routes
-   Branches
-   Contributing
-   License
-   Authors

## 🎯 Project Overview

This repository is part of an exciting group project developed during the Femcoders Norte Bootcamp at Factoria F5. Delisana is an online store specializing in personalized pastries. Our mission is to provide a seamless shopping experience for those who want to enjoy delicious treats without compromising their health.
<br><br>

## Backend Stack

This repository serves as the **backend stack** for Delisana's exciting project. It is intricately linked with our [**frontend repository**](https://github.com/P10MarketplaceDelisana/Delisana_Front), which resides within the P10MarketplaceDelisana organization.<br><br>
Our decision to maintain separate repositories for **frontend** and **backend** offers several key benefits:

1. **Clarity and Separation**: Clear boundaries between project components allow focused work.<br>
2. **Independent Version Control**: Separate versioning and deployment streamline updates.<br>
3. **Reduced Conflicts**: Fewer merge conflicts since teams don't modify the same files.<br>
4. **Security and Access Control**: Role-based access ensures appropriate permissions.<br>
5. **CI/CD Simplicity**: Customized CI/CD flows for each repository.<br><br>

## ⚙️ Technologies

[![My Skills](https://skillicons.dev/icons?i=php,laravel,mysql)](https://skillicons.dev)
<br>

## 🚀 Installation Guide (Laravel and MySQL)

**1. Clone the Repository**<br>
First, clone your project repository from GitHub or any other version control system:<br>
```git clone: https://github.com/P10MarketplaceDelisana/Delisana_Back.git```      


**2. Configure Environment**<br>
Navigate to your project directory:

    cd delisana-back    

Copy the .env.example file and rename it to .env. Then, configure the necessary environment variables, such as the database connection:

    cp .env.example .env    

Edit the .env file and set values for DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, and DB_PASSWORD according to your MySQL setup.

**3. Install Dependencies**<br>
Install project dependencies using Composer:

    composer install    

**4. Generate Application Key**<br>
Generate a unique application key for your project:

    php artisan key:generate    

**5. Run Migrations**<br>
Create the database tables by running migrations:

    php artisan migrate    

**6. Start the Server**
Launch the Laravel development server:

    php artisan serve    

**That’s it! Your Delisana project is now set up and running.** <br>
You can access it at :  ```http://localhost:8000.
npm start. ```   

Note: This vision statement is a fictional example created for the Factoria F5 Femcoders Norte Bootcamp.
<br><br>

## 🌐 API Routes

In Delisana, we’ve developed several API routes using Laravel to handle HTTP requests. These routes are essential for communication between the frontend and backend of our application.

**Product Routes:**<br>
/api/products:
Retrieves a list of all available products.<br>
/api/products/{id}: Retrieves details of a specific product by its ID.<br>
**Category Routes:**<br>
/api/categories: Retrieves a list of all product categories.<br>
/api/categories/{id}: Retrieves details of a specific category by its ID.<br>
**Intolerance Routes:**<br>
/api/intolerances: Retrieves a list of all supported intolerances.<br>
/api/intolerances/{id}: Retrieves details of a specific intolerance by its ID.

## 🪢 Branches

| BRANCH      | Description                                                                         |
| ----------- | ----------------------------------------------------------------------------------- |
| main        | Main branch. Only final functional versions of the user stories will appear here    |
| dev         | Development branch. Here we merge frontend and backend branches and check stability |
| feature/... | Various branches each one for an individual feature                                 |

<br>

## 🤝 Contributions

Contributions are welcome. If you have any suggestions for improvement, please open an issue or pull request
<br>

## 📜 License

This project is licensed under the terms of the MIT license. This means that you can use, copy, modify and distribute the code freely, as long as you acknowledge the original authorship and do not use it for commercial purposes.
<br><br>

## 👩‍💻 Authors

Created by:

-   [María Cao](https://github.com/maicaocaa)
-   [Claudia González](https://github.com/claudiaglez)
-   [Johana Sadoval](https://github.com/Sandovaljohana)
-   [Loli Vila](https://github.com/Vila71)
-   [Helena de Rosa](https://github.com/HelenaDR84)
