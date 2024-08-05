<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        table {
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Employee Data</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Role</th>
                    <th>Hire Date</th>
                    <th>Status</th>
                    <th>Salary</th>
                    <th>Department</th>
                    <th>Projects Completed</th>
                    <th>Last Login</th>
                    <th>Access Level</th>
                </tr>
            </thead>
            <tbody id="employeeData">
                <tr>
                    <td>1</td>
                    <td>Alice Johnson</td>
                    <td>28</td>
                    <td>Engineer</td>
                    <td>2022-01-15</td>
                    <td>Active</td>
                    <td>85000</td>
                    <td>Development</td>
                    <td>5</td>
                    <td>2024-07-28T14:48:00.000Z</td>
                    <td>Admin</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Bob Smith</td>
                    <td>34</td>
                    <td>Manager</td>
                    <td>2020-06-30</td>
                    <td>Inactive</td>
                    <td>95000</td>
                    <td>Operations</td>
                    <td>10</td>
                    <td>2024-07-30T09:21:00.000Z</td>
                    <td>User</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Charlie Rose</td>
                    <td>22</td>
                    <td>Intern</td>
                    <td>2023-03-01</td>
                    <td>Active</td>
                    <td>45000</td>
                    <td>Development</td>
                    <td>1</td>
                    <td>2024-07-29T17:03:00.000Z</td>
                    <td>User</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>David Green</td>
                    <td>40</td>
                    <td>Director</td>
                    <td>2018-11-20</td>
                    <td>Active</td>
                    <td>120000</td>
                    <td>Management</td>
                    <td>20</td>
                    <td>2024-07-27T12:35:00.000Z</td>
                    <td>Admin</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Eva White</td>
                    <td>30</td>
                    <td>Designer</td>
                    <td>2021-05-15</td>
                    <td>Active</td>
                    <td>70000</td>
                    <td>Design</td>
                    <td>8</td>
                    <td>2024-07-31T10:15:00.000Z</td>
                    <td>User</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Frank Black</td>
                    <td>29</td>
                    <td>Engineer</td>
                    <td>2019-09-17</td>
                    <td>Active</td>
                    <td>80000</td>
                    <td>Development</td>
                    <td>6</td>
                    <td>2024-07-25T11:45:00.000Z</td>
                    <td>User</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Grace Brown</td>
                    <td>26</td>
                    <td>Engineer</td>
                    <td>2021-04-10</td>
                    <td>Inactive</td>
                    <td>78000</td>
                    <td>Development</td>
                    <td>4</td>
                    <td>2024-07-20T09:00:00.000Z</td>
                    <td>User</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>Hank Green</td>
                    <td>45</td>
                    <td>Senior Manager</td>
                    <td>2017-03-25</td>
                    <td>Active</td>
                    <td>110000</td>
                    <td>Operations</td>
                    <td>15</td>
                    <td>2024-07-29T13:22:00.000Z</td>
                    <td>Admin</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td>Ivy Blue</td>
                    <td>31</td>
                    <td>Designer</td>
                    <td>2019-08-05</td>
                    <td>Active</td>
                    <td>72000</td>
                    <td>Design</td>
                    <td>7</td>
                    <td>2024-07-28T08:48:00.000Z</td>
                    <td>User</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td>Jack White</td>
                    <td>37</td>
                    <td>Product Manager</td>
                    <td>2020-02-20</td>
                    <td>Inactive</td>
                    <td>95000</td>
                    <td>Product</td>
                    <td>12</td>
                    <td>2024-07-26T15:18:00.000Z</td>
                    <td>Admin</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td>Kara Black</td>
                    <td>33</td>
                    <td>Engineer</td>
                    <td>2018-12-12</td>
                    <td>Active</td>
                    <td>85000</td>
                    <td>Development</td>
                    <td>9</td>
                    <td>2024-07-29T12:00:00.000Z</td>
                    <td>User</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td>Leo Green</td>
                    <td>27</td>
                    <td>Designer</td>
                    <td>2021-01-30</td>
                    <td>Active</td>
                    <td>68000</td>
                    <td>Design</td>
                    <td>3</td>
                    <td>2024-07-28T16:15:00.000Z</td>
                    <td>User</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td>Mona Blue</td>
                    <td>36</td>
                    <td>Engineer</td>
                    <td>2019-11-18</td>
                    <td>Active</td>
                    <td>87000</td>
                    <td>Development</td>
                    <td>11</td>
                    <td>2024-07-30T14:50:00.000Z</td>
                    <td>User</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>Nina Brown</td>
                    <td>25</td>
                    <td>Intern</td>
                    <td>2023-04-14</td>
                    <td>Active</td>
                    <td>42000</td>
                    <td>Development</td>
                    <td>2</td>
                    <td>2024-07-31T11:00:00.000Z</td>
                    <td>User</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td>Oscar White</td>
                    <td>42</td>
                    <td>Director</td>
                    <td>2016-05-11</td>
                    <td>Active</td>
                    <td>125000</td>
                    <td>Management</td>
                    <td>22</td>
                    <td>2024-07-29T10:05:00.000Z</td>
                    <td>Admin</td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
