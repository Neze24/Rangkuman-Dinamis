<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Journal Page</title>
  <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@700&display=swap" rel="stylesheet"/>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Kanit', sans-serif;
    }

    body {
      background: #f4f4f4;
      padding: 40px;
    }

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-bottom: 20px;
      border-bottom: 1px solid #ccc;
    }

    .logo p {
      font-weight: bold;
      line-height: 1.2;
      font-size: 14px;
    }

    nav a {
      text-decoration: none;
      color: black;
      margin: 0 12px;
      font-weight: 500;
    }

    nav a.active {
      color: #00c8d6;
      font-weight: bold;
    }

    .main-container {
      display: flex;
      justify-content: space-between;
      margin-top: 30px;
    }

    .left-table {
      background: #1f1f1f;
      color: white;
      border-radius: 8px;
      overflow: hidden;
      width: 65%;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th {
      background-color: #00c8d6;
      color: black;
      padding: 12px;
      text-align: left;
      font-size: 16px;
    }

    td {
      padding: 14px;
      border-bottom: 1px solid #444;
    }

    .right-box {
      background: #1f1f1f;
      color: white;
      border-radius: 12px;
      padding: 30px;
      width: 30%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: space-between;
    }

    .right-box h2 {
      font-size: 26px;
      margin-bottom: 10px;
    }

    .right-box p {
      font-size: 14px;
      color: #ccc;
    }

    .progress-bar {
      margin: 20px 0;
      width: 100%;
      height: 10px;
      border-radius: 5px;
      background: #444;
      position: relative;
    }

    .progress-bar::before {
      content: "";
      height: 100%;
      width: 8%;
      background-color: #00c8d6;
      border-radius: 5px;
      position: absolute;
    }

    .btn {
      margin: 10px 0;
      padding: 10px 20px;
      width: 100%;
      border: none;
      border-radius: 20px;
      font-weight: bold;
      font-size: 14px;
      cursor: pointer;
    }

    .btn.delete {
      background-color: #00c8d6;
      color: black;
    }

    .btn.edit {
      background-color: transparent;
      color: #00c8d6;
      border: 2px solid #00c8d6;
    }

    footer {
      text-align: center;
      margin-top: 40px;
      font-size: 12px;
      color: #666;
    }

    h1 {
      font-size: 36px;
      color: black;
      text-shadow: 2px 2px #00c8d6;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>

  <header>
    <div class="logo">
      <p>Digital Product<br>Engineering</p>
    </div>
    <nav>
      <a href="#">HOME</a>
      <a href="#">ARTICLE</a>
      <a class="active" href="#">JOURNAL</a>
    </nav>
    <div class="user">Username</div>
  </header>

  <h1>JOURNAL</h1>

  <div class="main-container">
    <div class="left-table">
      <table>
        <thead>
          <tr>
            <th>No</th>
            <th>Date</th>
            <th>Time</th>
            <th>Activity</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>28/07/2025</td>
            <td>08:00</td>
            <td>Study UI Design</td>
          </tr>
          <tr>
            <td>2</td>
            <td>28/07/2025</td>
            <td>10:00</td>
            <td>Work on Journal</td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="right-box">
      <h2>11th Day</h2>
      <p>134 days remaining</p>
      <div class="progress-bar"></div>
      <button class="btn delete">Delete</button>
      <button class="btn edit">Edit</button>
    </div>
  </div>

  <footer>
    Copyright © 2024 Telkom DPE. All Rights Reserved.
  </footer>

</body>
</html>
