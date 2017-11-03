<div id="mainBody" class="container">

<!-- Jumbotron Starts Here -->
<div class="jumbotron">
    <h1>Login</h1>
</div>

<form id="authForm" method="POST" novalidate>
    <div id="authUsernameDiv" class="form-group">
        <label id="authUsernameLabel" for="authUName">Username</label>
        <input type="text" name="authUName" class="form-control" id="authUName" placeholder="Enter Username" required>
        <div class="invalid-feedback" style="color: #FFF">
        Please provide a username.
      </div>
    </div>
    <div id="authCheckboxDiv" class="form-check">
        <label class="form-check-label">
            <input type="checkbox" class="form-check-input">
            Remember my username:
        </label>
    </div>
    <div id="authPasswordDiv" class="form-group">
        <label id="authPasswordLabel" for="authPass">Password</label>
        <input type="password" name="authPass" class="form-control" id="authPass" placeholder="Password" required>
        <div class="invalid-feedback" style="color: #FFF">
        Please provide a valid password.
      </div>
    </div>
    <button type="submit" id="ajaxAuthBtn" class="btn btn-primary">Sign-in</button>
</form>

</div> <!-- /container end -->