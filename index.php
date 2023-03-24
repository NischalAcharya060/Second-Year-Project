<?php
session_start();

if (!isset($_SESSION['username'])) {
  $_SESSION['msg'] = "You must log in first";
  header('location: login.php');
}
if (isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Management System</title>
    <link rel="stylesheet" href="css/index.css">
    <link
      href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css"
      rel="stylesheet"
    />
</head>

<body>

    
<div class="content">
        <!-- notification message -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="error success">
                <h3>
                    <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <!-- logged in user information -->
        <?php if (isset($_SESSION['username'])) : ?>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
            <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
        <?php endif ?>
    </div>

    <!-- SIDEBAR -->
    <section id="sidebar">
      <a href="#" class="brand">
        <i class="bx bxs-smile"></i>
        <span class="logo">Project Management System</span>
      </a>
      <ul class="side-menu top">
        <li class="active">
          <a href="#">
            <i class="bx bxs-dashboard"></i>
            <span class="text">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bxs-shopping-bag-alt"></i>
            <span class="text">Projects</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bxs-doughnut-chart"></i>
            <span class="text">Task</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bxs-message-dots"></i>
            <span class="text">Report</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bxs-group"></i>
            <span class="text">Users</span>
          </a>
        </li>
      </ul>
      <ul class="side-menu">
        <li>
          <a href="#">
            <i class="bx bxs-cog"></i>
            <span class="text">Settings</span>
          </a>
        </li>
        <li>
          <a href="index.php?logout='1'" class="logout">
            <i class="bx bxs-log-out-circle"></i>
            <span class="text">Logout</span>
          </a>
        </li>
      </ul>
    </section>

    <section id="content">
      <!-- NAVBAR -->
      <nav>
        <i class="bx bx-menu"></i>
        <a href="#" class="nav-link">Slidebar</a>
        <form action="#">
          <div class="form-input">
            <input type="search" placeholder="Search..." />
            <button type="submit" class="search-btn">
              <i class="bx bx-search"></i>
            </button>
          </div>
        </form>
        <input type="checkbox" id="switch-mode" hidden />
        <label for="switch-mode" class="switch-mode"></label>
        <a href="#" class="notification">
          <i class="bx bxs-bell"></i>
          <span class="num">99</span>
        </a>
        <a href="#" class="profile">
          <img src="img/admin.png" />
        </a>
      </nav>

      <!-- MAIN -->
      <main>
        <div class="head-title">
          <div class="left">
            <h1>Dashboard</h1>
            <ul class="breadcrumb">
              <li>
                <a href="#">Dashboard</a>
              </li>
              <li><i class="bx bx-chevron-right"></i></li>
              <li>
                <a class="active" href="#">Home</a>
              </li>
            </ul>
          </div>
          <!-- <a href="#" class="btn-download">
            <i class="bx bxs-cloud-download"></i>
            <span class="text">Download PDF</span>
          </a> -->
        </div>

        <ul class="box-info">
          <li>
            <i class="bx bxs-calendar-check"></i>
            <span class="text">
              <h3>1020</h3>
              <p>New Projects</p>
            </span>
          </li>
          <li>
            <i class="bx bxs-group"></i>
            <span class="text">
              <h3>2834</h3>
              <p>Total Users</p>
            </span>
          </li>
          <li>
            <i class="bx bxs-add-to-queue"></i>
            <span class="text">
              <h3>254</h3>
              <p>Task</p>
            </span>
          </li>
        </ul>

        <div class="table-data">
          <div class="order">
            <div class="head">
              <h3>Recent Projects</h3>
              <i class="bx bx-search"></i>
              <i class="bx bx-filter"></i>
            </div>
            <table>
              <thead>
                <tr>
                  <th>Project Name</th>
                  <th>Start Date</th>
                  <th>End Date</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <img src="img/user.png" />
                    <p>Sample Project</p>
                  </td>
                  <td>01-10-2021</td>
                  <td>01-20-2022</td>
                  <td><span class="status completed">Completed</span></td>
                </tr>
                <tr>
                  <td>
                    <img src="img/user.png" />
                    <p>Bus Management System</p>
                  </td>
                  <td>01-10-2021</td>
                  <td>pending</td>
                  <td><span class="status pending">Pending</span></td>
                </tr>
                <tr>
                  <td>
                    <img src="img/user.png" />
                    <p>Project Management System</p>
                  </td>
                  <td>01-10-2021</td>
                  <td>processing</td>
                  <td><span class="status process">Process</span></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="todo">
            <div class="head">
              <h3>To-Do</h3>
              <i class="bx bx-plus"></i>
              <i class="bx bx-filter"></i>
            </div>
            <ul class="todo-list">
              <li class="completed">
                <p>Todo List</p>
                <i class="bx bx-dots-vertical-rounded"></i>
              </li>
              <li class="not-completed">
                <p>Todo List</p>
                <i class="bx bx-dots-vertical-rounded"></i>
              </li>
            </ul>
          </div>
        </div>
      </main>
    </section>
<script src="js/index.js"></script>
</body>

</html>