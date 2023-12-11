<!DOCTYPE html>
<html>
  <head>
    <title>Website Feedback Form</title>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      font-weight: 400;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 3px;
      }
      form {
      width: 100%;
      padding: 20px;
      background: #fff;
      box-shadow: 0 2px 5px #ccc; 
      }
      input {
      width: calc(100% - 10px);
      padding: 5px;
      border: 1px solid #ccc;
      border-radius: 3px;
      vertical-align: middle;
      }
      input:hover, textarea:hover {
      outline: none;
      border: 1px solid #095484;
      }
      th, td {
      width: 28%;
      padding: 15px 0;
      border-bottom: 1px solid #ccc;
      text-align: center;
      vertical-align: unset;
      line-height: 18px;
      font-weight: 400;
      word-break: break-all;
      }
      .first-col {
      width: 16%;
      text-align: left;
      }
      textarea:hover {
      outline: none;
      border: 1px solid #1c87c9;
      }
      table {
      width: 100%;
      }
      textarea {
      width: calc(100% - 6px);
      }
      .question {
      padding: 15px 0 5px;
      color: #095484;
      }
      .question-answer label {
      display: block;
      padding: 0 20px 10px 0;
      }
      .question-answer input {
      width: auto;
      }
      .btn-block {
      margin-top: 20px;
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border: none;
      -webkit-border-radius: 5px; 
      -moz-border-radius: 5px; 
      border-radius: 5px; 
      background-color: #095484;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background-color: #0666a3;
      }
      @media (min-width: 568px) {
      th, td {
      word-break: keep-all;
      }
      }
    </style>
  </head>
  <body>
    <div class="testbox">
      <form action="/">
        <h1>Website Feedback Form</h1>
        <p class="question">Is this the first time you have visited the website?</p>
        <div class="question-answer">
          <label><input type="radio" value="none" name="visited" /> yes</label>
          <label><input type="radio" value="none" name="visited" /> no</label>
        </div>
        <p class="question">What is the PRIMARY reason you came to the site?</p>
        <textarea rows="5"></textarea>
        <p class="question">Did you find what you needed?</p>
        <div class="question-answer">
          <label><input type="radio" value="none" name="needed" /> Yes, all of it</label>
          <label><input type="radio" value="none" name="needed" /> Yes, some of it</label>
          <label><input type="radio" value="none" name="needed" /> No, none of it</label>
        </div>
        <p class="question">If you did not find any or all of what you needed, please tell us what information you were looking for.</p>
        <textarea rows="5"></textarea>
        <p class="question">Please tell us how easy it is to find information on the site.</p>
        <div class="question-answer">
          <label><input type="radio" value="none" name="easy" /> Very Easy</label>
          <label><input type="radio" value="none" name="easy" /> Easy</label>
          <label><input type="radio" value="none" name="easy" /> Average</label>
          <label><input type="radio" value="none" name="easy" /> Difficult</label>
          <label><input type="radio" value="none" name="easy" /> Very Difficult</label>
        </div>
        <p class="question">What is your overall impression of the site?</p>
        <table>
          <tr>
            <th class="first-col"></th>
            <th>Below Expectations</th>
            <th>Meets Expectations</th>
            <th>Exceeds Expectations</th>
          </tr>
          <tr>
            <td class="first-col">Professional</td>
            <td><input type="radio" value="none" name="professional" /></td>
            <td><input type="radio" value="none" name="professional" /></td>
            <td><input type="radio" value="none" name="professional" /></td>
          </tr>
          <tr>
            <td class="first-col">Informative</td>
            <td><input type="radio" value="none" name="Informative" /></td>
            <td><input type="radio" value="none" name="Informative" /></td>
            <td><input type="radio" value="none" name="Informative" /></td>
          </tr>
          <tr>
            <td class="first-col">Visually Pleasing</td>
            <td><input type="radio" value="none" name="Visually" /></td>
            <td><input type="radio" value="none" name="Visually" /></td>
            <td><input type="radio" value="none" name="Visually" /></td>
          </tr>
        </table>
        <p class="question">What is the likelihood that you will visit the website again?</p>
        <div class="question-answer">
          <label><input type="radio" value="none" name="likelihood" /> Extremely likely</label>
          <label><input type="radio" value="none" name="likelihood" /> Very likely</label>
          <label><input type="radio" value="none" name="likelihood" /> Moderately likely</label>
          <label><input type="radio" value="none" name="likelihood" /> aSlightly likely</label>
          <label><input type="radio" value="none" name="likelihood" /> Not at all likely</label>
        </div>
        <p class="question">Please add any comments you have for improving the website. We welcome suggestions on specific areas for improvements, features you would like to see added to the site, and examples of what you consider good websites.</p>
        <textarea rows="5"></textarea>
        <div class="btn-block">
          <button type="submit" href="/">Send</button>
        </div>
      </form>
    </div>
  </body>
</html>