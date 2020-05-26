<div class="tab-pane fade" id="how-to-consume" role="tabpanel" aria-labelledby="how-to-consume-list">
  <h1><font style="color: #f85351;">#</font> How To Consume</h1>
  <hr>
  <p>Lupi can consume in many way. For testing you can use <a href="http://postman.io">postman</a>, the best tool for testing API. I highly recommended you to download and install postman to try lupi. Before we trying to consume Lupi, I've create database named <b>library</b>, All of library data on database, you can check on application below. Sidebar Tell us about all table on library database, just click to show the data. Then let's try to consume it. You can try example of lupi in this link : <a href="http://lupi.titikdua.site">http://lupi.titikdua.site</a> , just copy it.</p>
  <hr>
  <!-- <iframe id="db" src="http://db.titikdua.site" width="100%" height="500px" style="transform: scale(90%);border:0px;"></iframe> -->
  <hr>
  <h4><font style="color: #f85351;">#</font> Postman</h4>
  <p>Let's try very simple testing lupi using postman. Let's do this.
  <ol>
    <li>Open Postman</li>
    <li>Create New</li>
    <li>Fill the URL with API Example Link (http://lupi.titikdua.site/index)</li>
    <li>Click on the <b>Body</b></li>
    <li>Select <b>raw</b></li>
    <li>Change into format into JSON</li>
    <li>Then fill Example JSON like below on the <b>body</b>
    <br>
    <div class="bg-light" style="padding:15px">
      { <br>
        "action" : "list",<br>
        "db" : "library",<br>
        "table" : "TX_HDR_USER",<br>
        "start" : "0"<br>
      } <br>
    </div>
    <li>Then click send, you will get response like this
      <br>
      <img src="assets/img/img1.png" alt="" style="width:90%">
    </li>
    <li>You can see that, the response show 2 data on table TX_HDR_USER. You can check is data same as table on <a href="#db">this</a>. You got it ? Remember because we use universal API, you can change value of "table" : <b>"TX_HDR_USER"</b> as you want. Absolutly you must check on available table first.</li>
    <li>Let's try insert data into database using example JSON like below
    <br>
    <div class="bg-light" style="padding:15px;font-weight:600">
      { <br>
          "action": "simpleSave",<br>
          "db": "library",<br>
          "table": "TX_BOOK",<br>
          "primaryKey": "BOOK_ID",<br>
          "value": [<br>
              {<br>
                  <font color="#f85351">"BOOK_ID": ""</font>,<br>
                  <font style="color:#0023de">"BOOK_TITLE"</font>: <font style="color:#00bc00">"Moon"</font>,<br>
                  <font style="color:#0023de">"BOOK_AUTHOR"</font>: <font style="color:#00bc00">"Chalidade"</font>,<br>
                  <font style="color:#0023de">"BOOK_PUBLISHER"</font>: <font style="color:#00bc00">"Gramedia"</font>,<br>
                  <font style="color:#0023de">"BOOK_USER"</font>: <font style="color:#00bc00">"1"</font><br>
              }<br>
          ]<br>
      }<br>
    </div>
    </li>
    <li>You can see that there are 3 color of that script. I will explain it.
      <ul>
        <li><font color="#f85351">Red</font> color is relate with primary key of table field. If you keep it blank, LUPI will read your command as insert. If you fill with id, Lupi will read your command as update.</li>
        <li>Then the second color is <font style="color:#0023de">blue</font>, it mean all field of your table. You must fill it with exactly, because it's <b>case sensitive</b> </li>
        <li>Last is <font style="color:#00bc00">green</font> color, it mean value that you want to insert in that field. you're free to fill as you want.</li>
      </ul>
    </li>
  </ol>
  </p>
</div>
