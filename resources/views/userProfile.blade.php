<!-- userProfile view -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>User Profile</title>
  <link rel="stylesheet" href="/assect/style/mainStyle.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <style>
    .container {
      width: 100%;
      height: 80vh;
    }
    .sidebar img {
      width: 90px;
    }
    .sidebar .intro {
      display: flex;
      line-height: 0.1;
      align-items: center;
      margin: 10px 0px;
      border-bottom: 1px solid gray;
    }
    .sidebar .intro h2 {
      font-size: 100%;
    }
    .sidebar .linkss {
      line-height: 0;
    }
    .sidebar .linkss a {
      color: black;
      font-size: 16px;
    }
    .innercontainer {
      width: 100%;
      height: 90vh;
      display: flex;
      justify-content: space-around;
    }
    .conttent {
      width: 90%;
      height: 80vh;
      background-color: blue;
      overflow: scroll;
      margin: 20px 0px;
      text-align: justify;
    }
    .shortcontent-tasks {
      background-color: gold;
      padding: 10px;
      box-shadow: 3px 3px 4px 2px rgba(0, 0, 0, 0.2);
    }
    .shortcontent-tasks:hover {
      background-color: lightgray;
    }
    .shortcontent {
      height: 195px;
      overflow: hidden;
      background-color: red;
      padding: 0px;
    }
    .right {
      overflow: scroll;
      display: flex;
      justify-content: center;
      width: 100%;
      text-align: justify;
    }
    .tasks {
      display: flex;
      justify-content: flex-end;
      border-top: 1px solid gray;
      margin-top: 30px;
    }
    .tasks img {
      width: 20px;
    }
    button {
      border: none;
      background: transparent;
      cursor: pointer;
      margin: 10px;
    }
    .settings {
      position: absolute;
      cursor: pointer;
    }
    .setting {
      line-height: 10px;
      position: relative;
      top: 0px;
      left: 0px;
      background-color: gold;
      padding: 20px;
      display: none;
    }
    .settings:hover .setting {
      display: block;
      background-color: red;
    }
  </style>
</head>
<body>
  @include('header')
  <div class="container">
    <div class="innercontainer">
      <div class="sidebar">
        <div class="intro">
          <div>
            <img src="/assect/images/systemImg/profile.png">
          </div>
          <div>
            <h2>Full name Here</h2>
            Email
          </div>
        </div>
        <div class="linkss">
          <ul type="none">
            <li><a href="/index.php/userProfile"><h5>My Contents</h5></a></li>
            <li><a href="/index.php/userProfile/saved"><h5>Saved</h5></a></li>
            <div class="settings">
              <li><h5>Setting</h5></li>
              <div class="setting">
                <li><a href="/index.php/setting/changePassword">Change Password</a></li>
                <li><a href="/index.php/setting/changeProfile">Change Profile</a></li>
                <li><a href="/index.php/setting/filterContent">Filter Content</a></li>
              </div>
            </div>
          </ul>
        </div>
      </div>
      <div class="right">
        <div class="conttent">
          <h1>Uploaded Contents</h1>
          <div class="shortcontent-tasks">
            <a href="/index.php/home/maincontent?blogid=123">
              <div class="shortcontent">
                <h2>Title of Content</h2><br>
                <em>Description: </em>Description of content.<br>
                <!-- Display other relevant properties -->
              </div>
            </a>
            <div class="tasks">
              <form>
                <input type="hidden" value="123" name="blogid">
                <input type="hidden" value="456" name="uid">
                <button type="submit" name="edit"><img src="/assect/images/systemImg/edit.png"></button>
              </form>
              <form>
                <input type="hidden" value="123" name="blogid">
                <input type="hidden" value="456" name="uid">
                <button type="submit" name="delete"><img src="/assect/images/systemImg/delete.png"></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
