<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Journal PKL</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Kanit', sans-serif;
            background-color: #fff;
            color: #000;
        }

        header {
            display: flex;
            justify-content: left;
            align-items: center;
            padding: 1rem 2rem;
            width: 100%;
            max-width: 1060px;
            margin: 0 auto;
            gap: 2rem;
            min-width: 650px;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.5rem 2rem;
            flex-wrap: wrap;
            font-family: Jura, sans-serif;
            max-width: 640px;
            width: 100%;
            box-sizing: border-box;
        }

        nav {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
        }

        nav a {
            color: #000;
            text-decoration: none;
            font-size: 14px;
            position: relative;
            transition: color 0.3s ease;
        }

        nav a:hover {
            color: #00ADB5;
        }

        nav a.active {
            color: #00ADB5;
            font-weight: bold;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 1rem;
            font-size: small;
        }

        .title {
            font-size: 48px;
            margin-left: 280px;
            text-align: left;
            text-shadow: 5px 3px #000000;
            letter-spacing: 2px;
            color: #00c3d6;
        }

        main {
            display: flex;
            justify-content: center;
            gap: 60px;
            padding: 0 60px;
        }

        .table-box {
            background-color: #343941;
            border-radius: 10px;
            overflow: hidden;
        }

        table,
        td {
            border: 1px solid #f6f6f6;
        }

        table {
            border-collapse: collapse;
            width: 600px;
        }

        th {
            background-color: #00CFD1;
            color: black;
            text-align: left;
            padding: 12px;
            font-size: 14px;
        }

        td {
            background-color: #343941;
            padding: 20px;
            height: 80px;
            border-bottom: 2px solid #f6f6f6;
            color: white;
        }

        .right-panel {
            width: 300px;
        }

        .countdown-box {
            background-color: #121926;
            color: white;
            padding: 30px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 20px;
        }

        .countdown-box h2 {
            font-size: 28px;
            margin: 0 0 10px;
            font-weight: 800;
        }

        .countdown-box p {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 10px;
        }

        progress {
            width: 90%;
            height: 8px;
            border-radius: 10px;
        }

        progress::-webkit-progress-bar {
            background-color: #ccc;
            border-radius: 10px;
        }

        progress::-webkit-progress-value {
            background-color: #00cfd1;
            border-radius: 10px;
        }

        .btn {
            width: 100%;
            padding: 10px 0;
            border-radius: 25px;
            font-size: 14px;
            cursor: pointer;
            border: none;
            margin-bottom: 15px;
        }

        .delete-btn {
            background-color: #121926;
            color: #00CFD1;
            border: 2px solid #00CFD1;
        }

        .delete-btn:hover {
            background-color: #00ADB5;
            color: #fff;
            background-color: #00ADB5;
            color: #fff;
        }

        footer {
            text-align: center;
            font-size: 10px;
            color: gray;
            margin: 50px 0 20px;
        }

        .copyright {
            text-align: center;
            font-size: 12px;
            margin: 1rem 0;
            color: #444;
        }

        @media (max-width: 768px) {
            main {
                flex-direction: column;
                align-items: center;
            }

            h1 {
                text-align: center;
                margin-left: 0;
            }
        }
    </style>
</head>

<body>

    <header>
        <div class="header-container">
            <div class="logo">
                <img src="../../asset/8665571_laptop_code_icon 1.svg" alt="Logo" height="35px" />
                <p>DIGITAL PRODUCT <br /> ENGINEERING</p>
            </div>
            <nav>
                <a href="../../index.html">HOME</a>
                <a href="../page.php?Id=1&No=1">ARTICLE</a>
                <a href="../../index.html">LOGOUT</a>
            </nav>
        </div>
        <p style="margin-left: auto; font-size: 14px;">
            <?= $username ?>
        </p>
    </header>

    <h1 class="title">JOURNAL</h1>

    <main>
        <div class="table-box">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Kegiatan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="3" style="width: 30px;"></td>
                        <td rowspan="3" style="width: 100px;"></td>
                        <td rowspan="3" style="width: 100px;"></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="right-panel">
            <div class="countdown-box">
                <h2 id="day-count">11th Day</h2>
                <p><span id="remaining-days">134</span> days remaining</p>
                <progress id="progress-bar" value="11" max="150"></progress>
            </div>
            <button class="btn delete-btn">Delete</button>
            <button class="btn delete-btn">Edit</button>
        </div>
    </main>

    <footer>
        Copyright © 2025 Telkom DPE. All Rights Reserved.
    </footer>

    <script>
        const startDate = new Date("2025-07-14");
        const today = new Date();
        const diffTime = today - startDate;
        const diffDays = Math.floor(diffTime / (1000 * 60 * 60 * 24)) + 1;
        const totalDays = 150;
        const remaining = Math.max(0, totalDays - diffDays);

        document.getElementById("day-count").innerText = `${diffDays}th Day`;
        document.getElementById("remaining-days").innerText = remaining;
        document.getElementById("progress-bar").value = diffDays;
        document.getElementById("progress-bar").max = totalDays;
    </script>

</body>

</html>