<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div id="app" class=" bg-dark vh-100">
        <div class="container d-flex justify-content-center align-items-center h-100">
            <div class="col-4 bg-light rounded-4 p-5">
                <ul>
                    <li class="list-group-item fs-4 to-uppercase" v-for="task in tasksList">{{task}}</li>
                </ul>

                <div class="mb-3 d-flex mt-2">
                    <input type="text" name="task" id="task" class="form-control rounded-0" placeholder="Add a new task" aria-describedby="taskHelper" v-model='newTask' @keyup.enter="addTask">
                    <button type="submit" class="btn btn-primary rounded-0" @click="addTask">
                        Submit
                    </button>
                </div>

            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="./app.js"></script>

</html>