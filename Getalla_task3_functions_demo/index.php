<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SQL Functions Demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-4">

    <h1 class="text-center mb-4">SQL Functions Demonstration</h1>

    <!-- STRING FUNCTIONS -->
    <div class="card mb-4">
        <div class="card-header bg-primary text-white">
            String Functions
        </div>
        <div class="card-body">
            <table class="table table-bordered border-3">
                <tr class="table-active">
                    <th>Function</th>
                    <th>Description</th>
                    <th>SQL Example</th>
                    <th>Output</th>
                </tr>
                <tr>
                    <td>UPPER()</td>
                    <td>Convert text to uppercase</td>
                    <td><code>SELECT UPPER(name) FROM users;</code></td>
                    <td><a href="String/upper.php" class="btn btn-sm btn-primary">View</a></td>
                </tr>
                <tr>
                    <td>LOWER()</td>
                    <td>Convert text to lowercase</td>
                    <td><code>SELECT LOWER(email) FROM users;</code></td>
                    <td><a href="String/lower.php" class="btn btn-sm btn-primary">View</a></td>
                </tr>
                <tr>
                    <td>LENGTH()</td>
                    <td>String length</td>
                    <td><code>SELECT LENGTH(name) FROM users;</code></td>
                    <td><a href="String/length.php" class="btn btn-sm btn-primary">View</a></td>
                </tr>
                <tr>
                    <td>CONCAT()</td>
                    <td>Join strings</td>
                    <td><code>SELECT CONCAT(first_name,last_name) FROM users;</code></td>
                    <td><a href="String/concat.php" class="btn btn-sm btn-primary">View</a></td>
                </tr>
                <tr>
                    <td>SUBSTRING()</td>
                    <td>Extract text</td>
                    <td><code>SELECT SUBSTRING(name,1,4) FROM users;</code></td>
                    <td><a href="String/substring.php" class="btn btn-sm btn-primary">View</a></td>
                </tr>
                <tr>
                    <td>TRIM()</td>
                    <td>Remove spaces</td>
                    <td><code>SELECT TRIM(name) FROM users;</code></td>
                    <td><a href="String/trim.php" class="btn btn-sm btn-primary">View</a></td>
                </tr>
            </table>
        </div>
    </div>

    <!-- NUMERIC FUNCTIONS -->
    <div class="card mb-4">
        <div class="card-header bg-success text-white">
            Numeric Functions
        </div>
        <div class="card-body">
            <table class="table table-bordered border-3">
                <tr class="table-active">
                    <th>Function</th>
                    <th>Description</th>
                    <th>SQL Example</th>
                    <th>Output</th>
                </tr>
                <tr>
                    <td>COUNT()</td>
                    <td>Count rows</td>
                    <td><code>SELECT COUNT(*) FROM users;</code></td>
                    <td><a href="numeric/count.php" class="btn btn-sm btn-success">View</a></td>
                </tr>
                <tr>
                    <td>SUM()</td>
                    <td>Total</td>
                    <td><code>SELECT SUM(salary) FROM users;</code></td>
                    <td><a href="numeric/sum.php" class="btn btn-sm btn-success">View</a></td>
                </tr>
                <tr>
                    <td>AVG()</td>
                    <td>Average</td>
                    <td><code>SELECT AVG(salary) FROM users;</code></td>
                    <td><a href="numeric/avg.php" class="btn btn-sm btn-success">View</a></td>
                </tr>
                <tr>
                    <td>MAX()</td>
                    <td>Maximum</td>
                    <td><code>SELECT MAX(salary) FROM users;</code></td>
                    <td><a href="numeric/max.php" class="btn btn-sm btn-success">View</a></td>
                </tr>
                <tr>
                    <td>MIN()</td>
                    <td>Minimum</td>
                    <td><code>SELECT MIN(salary) FROM users;</code></td>
                    <td><a href="numeric/min.php" class="btn btn-sm btn-success">View</a></td>
                </tr>
                <tr>
                    <td>ROUND()</td>
                    <td>Round value</td>
                    <td><code>SELECT ROUND(salary,2) FROM users;</code></td>
                    <td><a href="numeric/round.php" class="btn btn-sm btn-success">View</a></td>
                </tr>
                <tr>
                    <td>CEILING()</td>
                    <td>Round up</td>
                    <td><code>SELECT CEILING(salary) FROM users;</code></td>
                    <td><a href="numeric/ceiling.php" class="btn btn-sm btn-success">View</a></td>
                </tr>
                <tr>
                    <td>FLOOR()</td>
                    <td>Round down</td>
                    <td><code>SELECT FLOOR(salary) FROM users;</code></td>
                    <td><a href="numeric/floor.php" class="btn btn-sm btn-success">View</a></td>
                </tr>
                <tr>
                    <td>ABS()</td>
                    <td>Absolute value</td>
                    <td><code>SELECT ABS(balance) FROM accounts;</code></td>
                    <td><a href="numeric/abs.php" class="btn btn-sm btn-success">View</a></td>
                </tr>
                <tr>
                    <td>MOD()</td>
                    <td>Remainder</td>
                    <td><code>SELECT MOD(10,3);</code></td>
                    <td><a href="numeric/mod.php" class="btn btn-sm btn-success">View</a></td>
                </tr>
            </table>
        </div>
    </div>

    <!-- DATE FUNCTIONS -->
    <div class="card mb-4">
        <div class="card-header bg-warning">
            Date Functions
        </div>
        <div class="card-body">
            <table class="table table-bordered border-3">
                <tr class="table-active">
                    <th>Function</th>
                    <th>Description</th>
                    <th>SQL Example</th>
                    <th>Output</th>
                </tr>
                <tr>
                    <td>NOW()</td>
                    <td>Current datetime</td>
                    <td><code>SELECT NOW();</code></td>
                    <td><a href="date/now.php" class="btn btn-sm btn-warning">View</a></td>
                </tr>
                <tr>
                    <td>CURDATE()</td>
                    <td>Current date</td>
                    <td><code>SELECT CURDATE();</code></td>
                    <td><a href="date/curdate.php" class="btn btn-sm btn-warning">View</a></td>
                </tr>
                <tr>
                    <td>YEAR()</td>
                    <td>Extract year</td>
                    <td><code>SELECT YEAR(created_at) FROM users;</code></td>
                    <td><a href="date/year.php" class="btn btn-sm btn-warning">View</a></td>
                </tr>
                <tr>
                    <td>MONTH()</td>
                    <td>Extract month</td>
                    <td><code>SELECT MONTH(created_at) FROM users;</code></td>
                    <td><a href="date/month.php" class="btn btn-sm btn-warning">View</a></td>
                </tr>
                <tr>
                    <td>DATEDIFF()</td>
                    <td>Date difference</td>
                    <td><code>SELECT DATEDIFF(NOW(),created_at) FROM users;</code></td>
                    <td><a href="date/datediff.php" class="btn btn-sm btn-warning">View</a></td>
                </tr>
            </table>
        </div>
    </div>

    <!-- ADVANCED FUNCTIONS -->
    <div class="card mb-4">
        <div class="card-header bg-dark text-white">
            Advanced / Conditional Functions
        </div>
        <div class="card-body">
            <table class="table table-bordered border-3">
                <tr class="table-active">
                    <th>Function</th>
                    <th>Description</th>
                    <th>SQL Example</th>
                    <th>Output</th>
                </tr>
                <tr>
                    <td>IF()</td>
                    <td>Conditional logic</td>
                    <td><code>SELECT IF(salary>50000,'High','Low') FROM users;</code></td>
                    <td><a href="advanced/if.php" class="btn btn-sm btn-dark">View</a></td>
                </tr>
                <tr>
                    <td>IFNULL()</td>
                    <td>Handle NULL</td>
                    <td><code>SELECT IFNULL(phone,'N/A') FROM users;</code></td>
                    <td><a href="advanced/ifnull.php" class="btn btn-sm btn-dark">View</a></td>
                </tr>
                <tr>
                    <td>CASE</td>
                    <td>Multiple conditions</td>
                    <td><code>CASE WHEN salary&gt;60000...</code></td>
                    <td><a href="advanced/case.php" class="btn btn-sm btn-dark">View</a></td>
                </tr>
            </table>
        </div>
    </div>

</div>
</body>
</html>
