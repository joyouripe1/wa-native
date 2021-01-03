<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" 
  href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  <title>send wa</title>
</head>
<body>

    <section>
      <div class="container">
      <br><br>
      <h3>Form WA</h3>
      <br><br>

      <div class="row">
        <div class="col-6">
          <form method="POST" action="send.php" target="_blank">

            <div class="form-group">
              <input type="text" name="name" class="form-control"  placeholder="name">
              <input type="hidden" name="noWa" value="*nohp">
            </div>
            
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control"  name="email" placeholder="abc@text.com">
            </div>

            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control" name="message"  rows="3"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Kirim</button>

          </form>
          </div>
      </div>
      </div>
    </section>
  
</body>
</html>