<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Login — Hangeul Student Portal</title>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
*{margin:0;padding:0;box-sizing:border-box}
:root{--navy:#0D2137;--navy2:#16324f;--red:#C0392B;--red2:#a93226;--teal:#2F9E8F;--ink:#12233b;--muted:#6b7688;--line:#e6ebf2}
body{font-family:'Inter',sans-serif;background:#eef2f7;min-height:100vh;color:var(--ink)}
.wrap{display:grid;grid-template-columns:1.05fr .95fr;min-height:100vh}

/* ---- Left brand panel ---- */
.hero{position:relative;overflow:hidden;background:linear-gradient(155deg,#0D2137 0%,#102a45 55%,#0a1a2c 100%);color:#fff;
  display:flex;flex-direction:column;justify-content:space-between;padding:56px 60px}
.hero::before{content:"";position:absolute;inset:0;opacity:.55;z-index:0;
  background:radial-gradient(closest-side at 85% 18%,rgba(47,158,143,.32),transparent 70%),
             radial-gradient(closest-side at 12% 88%,rgba(192,57,43,.30),transparent 72%)}
.hero .han{position:absolute;right:-3vw;bottom:-9vh;font-family:'Poppins',sans-serif;font-weight:800;
  font-size:min(34vw,440px);line-height:1;color:rgba(255,255,255,.045);z-index:0;user-select:none}
.hero>*{position:relative;z-index:1}
.brand{display:flex;align-items:center;gap:13px}
.brand img{height:42px}
.brand b{font-family:'Poppins',sans-serif;font-weight:700;font-size:20px;letter-spacing:-.01em;display:block;line-height:1}
.brand span{font-size:10.5px;letter-spacing:.24em;text-transform:uppercase;color:rgba(255,255,255,.55)}
.hero-mid h1{font-family:'Poppins',sans-serif;font-weight:800;font-size:clamp(28px,3vw,40px);line-height:1.12;
  letter-spacing:-.015em;margin-bottom:16px}
.hero-mid h1 em{font-style:normal;color:#5cc2b3}
.hero-mid p{font-size:15px;line-height:1.6;color:rgba(255,255,255,.72);max-width:42ch}
.feat{list-style:none;margin-top:30px;display:flex;flex-direction:column;gap:15px}
.feat li{display:flex;align-items:center;gap:13px;font-size:14px;color:rgba(255,255,255,.9)}
.feat i{width:34px;height:34px;border-radius:10px;background:rgba(255,255,255,.08);display:grid;place-items:center;
  color:#5cc2b3;font-size:14px;flex-shrink:0;border:1px solid rgba(255,255,255,.08)}
.hero-foot{font-size:12px;color:rgba(255,255,255,.5);letter-spacing:.03em}

/* ---- Right form panel ---- */
.pane{display:flex;align-items:center;justify-content:center;padding:40px 24px;background:#eef2f7}
.card{background:#fff;border-radius:20px;padding:44px 40px;width:100%;max-width:410px;
  box-shadow:0 18px 50px rgba(13,33,55,.10);border:1px solid var(--line)}
.card .m-brand{display:none;align-items:center;gap:10px;justify-content:center;margin-bottom:22px}
.card .m-brand img{height:34px}.card .m-brand b{font-family:'Poppins',sans-serif;color:var(--navy);font-weight:700}
h2{font-family:'Poppins',sans-serif;font-size:24px;font-weight:700;color:var(--navy);margin-bottom:6px}
.sub{font-size:13.5px;color:var(--muted);margin-bottom:26px}
.fg{margin-bottom:17px}
label{display:block;font-size:12px;font-weight:600;color:#44506a;margin-bottom:7px;letter-spacing:.01em}
.ip{position:relative}
.ip .lic{position:absolute;left:14px;top:50%;transform:translateY(-50%);color:#9aa7ba;font-size:14px}
input{width:100%;padding:13px 14px 13px 42px;border:1.5px solid var(--line);border-radius:11px;font-size:14px;
  font-family:'Inter',sans-serif;outline:none;transition:border .2s,box-shadow .2s;background:#f8fafc;color:var(--ink)}
input:focus{border-color:var(--red);background:#fff;box-shadow:0 0 0 4px rgba(192,57,43,.10)}
.pw-wrap input{padding-right:62px}
.pw-toggle{position:absolute;right:6px;top:50%;transform:translateY(-50%);background:none;border:none;color:var(--red);
  font-size:12px;font-weight:600;font-family:'Inter',sans-serif;cursor:pointer;padding:6px 8px}
.row-fp{text-align:right;margin:-6px 0 16px}
.row-fp a{font-size:12.5px;color:var(--red);text-decoration:none;font-weight:600}
.row-fp a:hover{text-decoration:underline}
.btn{width:100%;padding:14px;background:var(--red);color:#fff;border:none;border-radius:11px;
  font-family:'Poppins',sans-serif;font-size:15px;font-weight:600;cursor:pointer;transition:background .2s,transform .05s;
  display:flex;align-items:center;justify-content:center;gap:9px}
.btn:hover{background:var(--red2)}.btn:active{transform:translateY(1px)}
.error{background:#fff5f5;border:1px solid #fed7d7;color:#c53030;padding:12px 14px;border-radius:10px;font-size:13px;
  margin-bottom:18px;display:flex;align-items:center;gap:9px}
.divider{display:flex;align-items:center;gap:12px;margin:24px 0 18px;color:#a9b4c4;font-size:11px;letter-spacing:.14em;text-transform:uppercase}
.divider::before,.divider::after{content:"";flex:1;height:1px;background:var(--line)}
.link{text-align:center;font-size:13.5px;color:var(--muted)}
.link a{color:var(--red);font-weight:600;text-decoration:none}
.link a:hover{text-decoration:underline}
.back{display:inline-flex;align-items:center;gap:7px;margin-top:16px;justify-content:center;width:100%;
  font-size:12.5px;color:var(--muted);text-decoration:none}
.back:hover{color:var(--navy)}

@media(max-width:900px){
  .wrap{grid-template-columns:1fr}
  .hero{display:none}
  .pane{min-height:100vh;padding:24px}
  .card .m-brand{display:flex}
}
</style>
</head>
<body>
<div class="wrap">
  <!-- Brand panel -->
  <aside class="hero">
    <span class="han">한</span>
    <div class="brand">
      <img src="imgs/logo.png" alt="Hangeul">
      <div><b>Hangeul</b><span>Korean Language &amp; Visa</span></div>
    </div>
    <div class="hero-mid">
      <h1>Your journey to<br><em>studying in Korea</em>,<br>tracked every step.</h1>
      <p>Log in to follow your application from documents to admission and visa — all in one place, updated in real time.</p>
      <ul class="feat">
        <li><i class="fas fa-file-circle-check"></i> Upload &amp; track your documents securely</li>
        <li><i class="fas fa-route"></i> Watch your admission progress live</li>
        <li><i class="fas fa-comments"></i> Talk to your consultant any time</li>
      </ul>
    </div>
    <div class="hero-foot">hangeul.com.bd &nbsp;·&nbsp; Dhaka, Bangladesh</div>
  </aside>

  <!-- Login panel -->
  <main class="pane">
    <div class="card">
      <div class="m-brand"><img src="imgs/logo.png" alt="Hangeul"><b>Hangeul Student Portal</b></div>
      <h2>Welcome back</h2>
      <p class="sub">Sign in to track your application &amp; admission progress.</p>

      
      <form method="POST">
        <input type="hidden" name="_csrf" value="82a290b10844287042241bbaf90cdfc196f415af061a5afac3d24c4dfd7bc2bc">        <div class="fg">
          <label>Email Address</label>
          <div class="ip">
            <i class="fas fa-envelope lic"></i>
            <input name="email" type="email" required placeholder="your@email.com" value="" autocomplete="username">
          </div>
        </div>
        <div class="fg">
          <label>Password</label>
          <div class="ip pw-wrap">
            <i class="fas fa-lock lic"></i>
            <input name="password" id="password" type="password" required placeholder="Your password" autocomplete="current-password">
            <button type="button" class="pw-toggle" onclick="togglePw(this)" aria-label="Show password">Show</button>
          </div>
        </div>
        <div class="row-fp"><a href="forgot_password.php">Forgot password?</a></div>
        <button class="btn" type="submit"><i class="fas fa-right-to-bracket"></i> Log In</button>
      </form>

      <div class="divider">New here?</div>
      <p class="link">Don't have an account yet? <a href="signup.php">Create one</a></p>
      <a class="back" href="/"><i class="fas fa-arrow-left"></i> Back to website</a>
    </div>
  </main>
</div>
<script>
function togglePw(btn){
  var i=document.getElementById('password');
  var show=i.type==='password';
  i.type=show?'text':'password';
  btn.textContent=show?'Hide':'Show';
  btn.setAttribute('aria-label',show?'Hide password':'Show password');
}
</script>
</body>
</html>
