<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <title>Learning Table</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: #f5f7fb;
            font-family: Arial, sans-serif;
        }

        .table-container {
            margin-top: 60px;
        }

        .title {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
            color: #2c3e50;
        }

        .table thead {
            background: linear-gradient(45deg, #0d6efd, #6610f2);
            color: white;
        }

        .table tbody tr:hover {
            background-color: #eef2ff;
            transition: 0.3s;
        }

        .badge-custom {
            background: #0d6efd;
            padding: 6px 10px;
            border-radius: 8px;
        }
    </style>
</head>

<body>

<div class="container table-container">

    <h2 class="title">📘 Learning Today</h2>

    <div class="card shadow-lg">
        <div class="card-body">

            <table class="table table-striped table-hover text-center align-middle">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>موضوع</th>
                        <th>دسته بندی</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>یادگیری امروز</td>
                        <td><span class="badge badge-custom">General</span></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>فریمورک</td>
                        <td><span class="badge badge-custom">Concept</span></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>لاراول</td>
                        <td><span class="badge badge-custom">Framework</span></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>ساختار لاراول</td>
                        <td><span class="badge badge-custom">Architecture</span></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>env</td>
                        <td><span class="badge badge-custom">Config</span></td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>request lifecycle</td>
                        <td><span class="badge badge-custom">Process</span></td>
                    </tr>
                    <tr>
                        <td>7</td>
                        <td>router</td>
                        <td><span class="badge badge-custom">Routing</span></td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>template engine</td>
                        <td><span class="badge badge-custom">Blade</span></td>
                    </tr>
                    <tr>
                        <td>9</td>
                        <td> migrations</td>
                        <td><span class="badge badge-custom">Database</span></td>
                    </tr>
                </tbody>
            </table>

            
        </div>
    </div>

</div>

</body>
</html>