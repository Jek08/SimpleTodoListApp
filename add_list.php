<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add List</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
  <link rel="stylesheet" href="add_list_style.css">
</head>

<body>
  <div class="add-container">
    <form action="" class="add-form">
      <input type="text" name="title" class="list-title" placeholder="What to do">
      <span class="list-item">
        <input type="text" name="listItem" placeholder="write your task here">
        <button class="material-icons-outlined delete-btn">close</button>
      </span>
      <button class="material-icons-outlined add-item-btn">add</button>
      <span class="btn-container">
        <button class="cancel-btn">Cancel</button>
        <button class="create-btn">Create</button>
      </span>
    </form>
  </div>
</body>

</html>