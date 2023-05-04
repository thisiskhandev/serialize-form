<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Compiled and minified CSS -->
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"
    />
    <link rel="stylesheet" href="./assets/styles.css" />

    <title>Serialize Form Data</title>
  </head>

  <body>
    <!-- Header -->
    <header>
      <nav>
        <div class="nav-wrapper">
          <div class="container">
            <a href="#" class="brand-logo">Serialize Form</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="sass.html">Sass</a></li>
              <li><a href="badges.html">Components</a></li>
              <li><a href="collapsible.html">JavaScript</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Content -->
    <main class="content">
      <section class="container" style="margin: 90px auto">
        <h1>Serialize Form Data</h1>
        <div class="row">
          <form class="col s12" id="serializeForm">
            <div class="row">
              <div class="input-field col m6 s12">
                <i class="material-icons prefix">account_circle</i>
                <input id="name" name="name" type="text" class="validate" />
                <label for="name">Name</label>
              </div>
              <div class="input-field col m6 s12">
                <i class="material-icons prefix">email</i>
                <input id="email" name="email" type="email" class="validate" />
                <label for="email">Email</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col m4 s12">
                <i class="material-icons prefix">phone</i>
                <input id="phone" name="phone" type="tel" class="validate" />
                <label for="phone">Phone Number</label>
              </div>
              <div class="input-field col m4 s12">
                <p>Gender</p>
                <p>
                  <label>
                    <input
                      class="with-gap"
                      name="gender"
                      type="radio"
                      value="Male"
                      checked
                    />
                    <span>Male</span>
                  </label>
                </p>
                <p>
                  <label>
                    <input name="gender" type="radio" value="female" />
                    <span>Female</span>
                  </label>
                </p>
              </div>
              <div class="input-field col m4 s12">
                <select name="country" id="country">
                  <option value="" disabled selected>
                    Select your country
                  </option>
                  <option value="pk">Pakistan</option>
                  <option value="ind">India</option>
                  <option value="afg">Afghanistan</option>
                </select>
                <label>Select Country</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">mode_edit</i>
                <textarea
                  id="msg"
                  type="text"
                  class="materialize-textarea"
                  name="msg"
                ></textarea>
                <label for="msg">Message...</label>
              </div>
            </div>
            <button
              class="btn waves-effect waves-light"
              type="submit"
              name="action"
              id="submit"
            >
              Submit
              <i class="material-icons right">send</i>
            </button>
          </form>
          <div id="response"></div>
        </div>
      </section>
    </main>

    <!-- Footer -->
    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Footer Content</h5>
            <p class="grey-text text-lighten-4">
              You can use rows and columns here to organize your footer content.
            </p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">Links</h5>
            <ul>
              <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
              <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          © 2023 Copyright Text
          <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
        </div>
      </div>
    </footer>

    <!-- Compiled and minified JavaScript -->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
      integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="./assets/js.js"></script>
  </body>
</html>
