<?php
/*
Template Name: Loan Calculation
*/
 ?>

<?php get_header(); ?>
    <div id="home-news">
      <div class="container">
        <div class="row">
          <div class="col-sm-3 sidebar">
            <div class="subscribe">
              <h1 class="title"><i class="fa fa-calculator"></i>Зээлийн <br>тооцоолуур</h1>
              <form name="loanCalc">
                <label for="precentValue">
                  Зээлийн хэмжээ:
                </label>
                <input type="nubmer" id="precentValue" name="precentValue" class="form-control" placeholder="Төгрөгөөр" required>
                <label for="annualInterest">
                  Зээлийн хүү:
                </label>
                <input type="number" id="annualInterest" name="annualInterest" class="form-control" placeholder="Жилээр (сарын хүү &times; 12) %" required>
                <label for="numberOfPeriods">
                  Зээл тѳлѳлтийн хугацаа
                </label>
                <input type="number" id="numberOfPeriods" name="numberOfPeriods" class="form-control" placeholder="Сараар" required>
                <label for="startDate">
                  Зээл авах огноо
                </label>
                <input type="date" id="startDate" name="startDate" class="form-control" placeholder="Огноо" required>
                <input type="submit" class="btn btn-lg" value="Тооцоолох">
              </form>
            </div>
          </div>
          <div class="col-sm-9 post-main">
            <h1 class="title">Зээлийн хүснэгт</h1>
            <div class="table-responsive">
              <table class="table loan table-bordered ac-table text-center">
                <thead>
                  <tr>
                    <th rowspan="2">Сар</th>
                    <th rowspan="2">Огноо</th>
                    <th rowspan="2">Хоног</th>
                    <th colspan="3">Төлбөр ₮</th>
                    <th rowspan="2">Үндсэн зээлийн үлдэгдэл ₮</th>
                  </tr>
                  <tr>
                    <th>Үндсэн</th>
                    <th>Хүүгийн</th>
                    <th>Тэнцүү</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      </div>
<?php get_footer(); ?>