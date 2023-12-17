# StoreKeeper Laravel Project

This is a basic Laravel project designed for storekeepers, providing essential features such as product management, sales tracking, and a dashboard for business insights.

## Features

- **Product Management:**
  - Add new products using a form that includes the product amount.
  - Update product quantity when new items are sold.

- **Price Adjustment:**
  - Collaborate with a syndicate consultant to change product prices.

- **Dashboard:**
  - Display key sales figures in a visually appealing dashboard.
  - Four cards showing sales figures for today, yesterday, this month, and last month.

- **Transaction History:**
  - View a detailed table of sale transactions on a separate page.

## Getting Started

### Prerequisites

- PHP
- Composer
- MySQL or another supported database

### Installation

1. Clone the repository:

    ```bash
    git clone <repository_url>
    cd StoreKeeper
    ```

2. Install dependencies:

    ```bash
    composer install
    ```

3. Update the `.env` file with your database credentials.

4. Run migrations:

    ```bash
    php artisan migrate
    ```

5. Serve the application:

    ```bash
    php artisan serve
    ```

6. Visit `http://localhost:8000` in your browser to start using the application.

## Usage

1. Access the application through the defined routes:
    - `/`: Product management.
    - `/dashboard`: Sales dashboard.
    - `/order-history`: Transaction history.


2. Follow the on-screen forms and interfaces to manage products, update quantities, and collaborate on price adjustments.

## Dashboard

The dashboard provides at-a-glance insights into sales figures, helping storekeepers make informed decisions.

### Key Metrics

- **Today's Sales**
- **Yesterday's Sales**
- **Monthly Sales**
- **Last Month's Sales**

## Transaction History

The transaction history page displays a table with detailed information about each sale.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
