<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8" />

  <meta
    name="viewport"
    content="width=device-width, initial-scale=1.0"
  />

  <title>
    Campaign Caption Ready
  </title>

  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
    rel="stylesheet"
  />

  <link href="css/style.css" rel="stylesheet" />

  <style>

    body{
      margin:0;
      font-family:'Poppins',sans-serif;
      background:
        linear-gradient(
          135deg,
          #0b7a1d 0%,
          #1da533 35%,
          #f5d64e 100%
        );

      min-height:100vh;
      padding:40px 20px;
      display:flex;
      align-items:center;
      justify-content:center;
    }

    .success-card{

      width:100%;
      max-width:760px;

      background:#fff;

      border-radius:32px;

      padding:50px;

      box-shadow:
        0 25px 60px rgba(0,0,0,.18);

      position:relative;

      overflow:hidden;
    }

    .success-badge{

      width:90px;
      height:90px;

      margin:0 auto 24px;

      border-radius:50%;

      background:
        linear-gradient(
          135deg,
          #0b7a1d,
          #22a73a
        );

      display:flex;
      align-items:center;
      justify-content:center;

      font-size:42px;

      color:#fff;

      box-shadow:
        0 15px 35px rgba(34,167,58,.35);
    }

    h1{

      text-align:center;

      font-size:38px;

      line-height:1.2;

      margin-bottom:16px;

      color:#111;
    }

    .subtitle{

      text-align:center;

      color:#666;

      font-size:16px;

      line-height:1.8;

      margin-bottom:35px;
    }

    .caption-card{

      background:#f8faf8;

      border:2px solid #edf2ed;

      border-radius:24px;

      padding:24px;

      margin-bottom:30px;
    }

    .caption-header{

      display:flex;
      align-items:center;
      justify-content:space-between;

      margin-bottom:18px;
    }

    .caption-title{

      font-size:20px;

      font-weight:700;

      color:#111;
    }

    .copy-btn{

      border:none;

      background:
        linear-gradient(
          135deg,
          #0b7a1d,
          #22a73a
        );

      color:#fff;

      padding:14px 22px;

      border-radius:16px;

      font-size:14px;

      font-weight:600;

      cursor:pointer;

      transition:.25s ease;

      box-shadow:
        0 10px 25px rgba(34,167,58,.25);
    }

    .copy-btn:hover{

      transform:translateY(-2px);
    }

    textarea{

      width:100%;

      min-height:320px;

      border:none;

      outline:none;

      resize:none;

      background:#fff;

      border-radius:18px;

      padding:22px;

      font-size:15px;

      line-height:1.9;

      color:#333;

      box-sizing:border-box;

      font-family:'Poppins',sans-serif;
    }

    .actions{

      display:flex;

      gap:18px;

      flex-wrap:wrap;
    }

    .action-btn{

      flex:1;

      min-width:220px;

      text-decoration:none;
    }

    .action-btn button{

      width:100%;

      border:none;

      padding:18px;

      border-radius:18px;

      font-size:15px;

      font-weight:600;

      cursor:pointer;

      transition:.25s ease;
    }

    .primary-btn{

      background:
        linear-gradient(
          135deg,
          #0b7a1d,
          #22a73a
        );

      color:#fff;

      box-shadow:
        0 10px 25px rgba(34,167,58,.25);
    }

    .secondary-btn{

      background:#f4f4f4;

      color:#222;
    }

    .primary-btn:hover,
    .secondary-btn:hover{

      transform:translateY(-2px);
    }

    .copied-message{

      display:none;

      margin-top:18px;

      background:#eef9ef;

      color:#0b7a1d;

      padding:14px;

      border-radius:14px;

      text-align:center;

      font-weight:600;
    }

    @media(max-width:768px){

      .success-card{
        padding:32px 24px;
      }

      h1{
        font-size:30px;
      }

      .caption-header{
        flex-direction:column;
        align-items:flex-start;
        gap:16px;
      }

      .copy-btn{
        width:100%;
      }
    }

  </style>

</head>

<body>

  <div class="success-card">

    <div class="success-badge">
      🎉
    </div>

    <h1>
      Your Campaign Profile Picture is Ready!
    </h1>

    <div class="subtitle">
      Your profile picture has been downloaded successfully.
      Copy the campaign caption below and share it together with your new profile picture.
    </div>

    <div class="caption-card">

      <div class="caption-header">

        <div class="caption-title">
          Gratitude Campaign Caption
        </div>

        <button
          class="copy-btn"
          onclick="copyText()"
        >
          Copy Caption
        </button>

      </div>

      <textarea
        id="zcmcMessage"
        readonly
      >
Hi, I’m <?php echo htmlspecialchars($_GET["name"] ?? '');?>.

One thing I’m truly grateful for is <?php echo htmlspecialchars($_GET["testimony"] ?? '');?>.

Gratitude changes the way we see life, and today I choose to celebrate the good things that continue to inspire me every day.

What are YOU grateful for? 💛

#IAmGrateful #GratitudeCampaign #ChooseLife #ThankfulHeart 
#SpreadTheTruth #ThankYouTeacher #FreeBibleStudy
</textarea>

      <div
        class="copied-message"
        id="copiedMessage"
      >
        ✅ Caption copied successfully!
      </div>

    </div>

    <div class="actions">

      <a
        href="index.php"
        class="action-btn"
      >
        <button class="primary-btn">
          Create Another Profile Picture
        </button>
      </a>

      <a
        href="#"
        class="action-btn"
      >
        <button
          class="secondary-btn"
          onclick="copyText()"
        >
          Copy Caption Again
        </button>
      </a>

    </div>

  </div>

  <script>

    function copyText() {

      const textarea =
        document.getElementById('zcmcMessage');

      textarea.select();

      textarea.setSelectionRange(0, 99999);

      navigator.clipboard.writeText(
        textarea.value
      );

      const copied =
        document.getElementById('copiedMessage');

      copied.style.display = 'block';

      setTimeout(function(){

        copied.style.display = 'none';

      }, 2500);
    }

  </script>

</body>
</html>