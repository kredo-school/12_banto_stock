<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <style>
        .container {
            display: flex;
            justify-content: center;
            /* align-items: center; */
            /* min-height: 100vh; */
        }
    </style>
</head>
<body>

<div class="container">
    <div class="mt-5 row">
        <div class="card border-primary text-primary w-50">
            <div class="card-header border-primary"><h2>Edit Profile</h2></div>
            <div class="card-body">

                    {{--  --}}
                    <div>
                        <form action="profileData.blade.php" method="post">
                        <label for="EmployeeNumber">Employee Number</label>
                        <input type="text" name="EmployeeNumber"><br><br>
                    </div>
            
                    <div>
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" placeholder="Last Name, First Name"><br><br>
                    </div>
            
                    <div>
                        <label for="BranchName">Branch Name</label>
                        <select name="BranchName">
                            <option value="Option1" disabled>Select Branch Name</option>
                            <option value="Option2">XXXXX</option>
                            <option value="Option3">YYYYY</option>
                            <option value="Option4">ZZZZZ</option>
                        </select><br><br>
                    </div>
            
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email"><br><br>
                    </div>
                
                        <!-- Add more fields for other profile data as needed -->
                
                        <button type="submit" class="btn btn-lg btn-primary" disabledname="submit">Save and Redirect</button>
                    
                    {{--  --}}
            
                </form>
            </div>
                
            </div>
        </div>
    </div>
</div>

</body>
</html>