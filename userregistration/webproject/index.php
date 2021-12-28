<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body{
            background-image: url(cool-background.png);
        }
        button {
            margin-left: auto;
            margin-bottom: 10px;
            display: block;
            width: 260px;
            border-radius: 4px;
                }

        .grid-container {
            display: grid;
            grid-gap: auto;
            grid-template-columns: auto auto auto auto auto;
            padding: 10px;
            width: 100vw;
            height: 100vh;
        }

        .grid-item {


            padding: 20px;
            font-size: 30px;
            text-align: center;
        }

        .item9 {

            padding: 20px;
            font-size: 30px;
            text-align: center;
            grid-column-start: 1;
            grid-column-end: 3;
        }

        .item10 {

            padding: 20px;
            font-size: 30px;
            text-align: center;
            grid-column-start: 3;
            grid-column-end: 5;
        }

        p {
            text-align: center;
            color: white;
        }

        img {
            width: 260px;
            height: 150px;
        }
    </style>

</head>

<body>
    <a class="float-end" href="login.php">Log out</a>
    <div class="grid-container">
        <form action="customers.php" method="post">
            <button class="btn btn-secondary" type="submit" name="cusB" value="customers"> Customers </button>
            <p>This table contains details about any customer who has ever dealt with the company.</p>
            <img src="people.png" alt="customers icon">
        </form>

        <form action="employees.php" method="post">
            <button class="btn btn-secondary" type="submit" name="empB" value="employees">Employees </button>
            <p>Details about our valued employees are stored in this database table.</p>
            <img src="employee.png" alt="employees icon">
        </form>

        <form action="offices.php" method="post">
            <button class="btn btn-secondary" type="submit" name="offB" value="offices"> Offices </button>
            <p>The offices that the company deals with.</p>
            <img src="office.png" alt="offices icon">
        </form>

        <form action="orderdetails.php" method="post">
            <button class="btn btn-secondary" type="submit" name="detB" value="orderdetails"> Order Details </button>
            <p>If you would like to check any order, this table contains details about every order that was sold.</p>
            <img src="list.png" alt="details">
        </form>


        <form action="orders.php" method="post">
            <button class="btn btn-secondary" type="submit" name="ordB" value="orders"> Orders </button>
            <p>This table has information about the numbering and structure of orders.</p>
            <img src="order.png" alt="order">
        </form>


        <form action="payments.php" method="post">
            <button class="btn btn-secondary" type="submit" name="payB" value="payments"> Payments </button>
            <p>Payments are managed and watched through this table.</p>
            <img src="debit-card.png" alt="money">
        </form>


        <form action="productlines.php" method="post">
            <button class="btn btn-secondary" type="submit" name="linB" value="productlines"> Product Lines </button>
            <p>The company provides multiple product lines. Here you can find information about them.</p>
            <img src="connection.png" alt="productlines">
        </form>


        <form action="products.php" method="post">
            <button class="btn btn-secondary" type="submit" name="proB" value="products"> Products </button>
            <p>Our products are the values that we provide to customers. This is a huge list of what we provide to our customers.</p>
            <img src="delivery-box.png" alt="">
        </form>

        <form action="queries.php" method="post">
            <button class="btn btn-secondary" type="submit" name="queB" value="queries"> Queries</button>
            <p>We've provided some special operations on the database, click here.</p>
            <img src="operation.png" alt="queries">
        </form>
        <form action="aboutUs.html" method="post">
            <button class="btn btn-secondary" type="submit" name="aboB" value="about"> About</button>
            <p>To learn more about our company, this section is for you.</p>
            <img src="info.png" alt="about">
        </form>



    </div>
</body>

</html>