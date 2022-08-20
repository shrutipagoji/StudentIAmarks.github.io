
<html>
<head>
    <title>Contact</title>
<link rel="stylesheet" href="../csss/email.css" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">

</head>
</html>
<section class="section section-email">
    <div class="container" >
      <br><br>
      <h2 class="common-heading" > Mail us</h2>
    </div>

    <div class="section-email-main email-container">
   <form action="https://formspree.io/f/xayvrdad"
  method="POST">
        <div class="grid grid-two-column">
          <div>

            <label for="username"></label>
            <input
              type="text"
              name="username"
              placeholder="Username"
              id="username"
              required
              autocomplete="off"
            />
          </div>
          <br><br>
          <div>
            <label for="email"></label>
            <input
              type="email"
              name="email"
              placeholder="demo@mail.com"
              id="email"
              autocomplete="off"
              required
            />
          </div>
        </div>

        <div>
          <label for="subject"></label>
          <input
            type="text"
            name="subject"
            placeholder="subject"
            id="subject"
            autocomplete="off"
            required
          />
        </div>
        <div>
          <label for="textarea"></label>
          <textarea
            name="textarea"
            id="textarea"
            cols="30"
            rows="10"
            autocomplete="off"
            placeholder="Write your message"
            required
          ></textarea>
        </div>

        <div>
          <input
            type="submit"
            name="submit"
            id="submit"
            class="btn"
            value="send message"
          />
      </div>
        

      </form>
    </div>
  </section>


  
  
  