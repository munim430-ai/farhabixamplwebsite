<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Partner Login — Hangeul</title>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&family=Inter:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
*{margin:0;padding:0;box-sizing:border-box}
body{font-family:'Inter',sans-serif;background:#eef2f7;min-height:100vh;display:flex;align-items:center;justify-content:center;padding:24px;color:#0D2137}
.shell{display:flex;width:100%;max-width:940px;min-height:560px;background:#fff;border-radius:22px;overflow:hidden;box-shadow:0 24px 60px rgba(13,33,55,.18)}
/* Left brand panel */
.brand{flex:1;position:relative;background:linear-gradient(150deg,#7a1f16 0%,#a5342a 55%,#c0392b 100%);color:#fff;padding:48px 44px;display:flex;flex-direction:column;justify-content:space-between;overflow:hidden}
.brand::before{content:'';position:absolute;top:-80px;right:-80px;width:280px;height:280px;border-radius:50%;background:radial-gradient(circle,rgba(255,255,255,.22),transparent 70%)}
.brand::after{content:'';position:absolute;bottom:-120px;left:-60px;width:320px;height:320px;border-radius:50%;background:radial-gradient(circle,rgba(13,33,55,.28),transparent 70%)}
.brand .b-top,.brand .b-mid,.brand .b-bot{position:relative;z-index:1}
.brand .blogo{display:flex;align-items:center;gap:11px}
.brand .blogo img{height:42px;background:#fff;border-radius:9px;padding:5px}
.brand .blogo .t{font-family:'Poppins',sans-serif;font-weight:700;font-size:19px;line-height:1.1}
.brand .blogo .t small{display:block;font-weight:400;font-size:10.5px;opacity:.8}
.brand h1{font-family:'Poppins',sans-serif;font-weight:700;font-size:30px;line-height:1.25;margin-bottom:14px}
.brand .lead{font-size:14px;line-height:1.7;opacity:.9;max-width:340px}
.feat{display:flex;flex-direction:column;gap:14px;margin-top:26px}
.feat div{display:flex;align-items:center;gap:12px;font-size:13.5px;opacity:.95}
.feat i{width:34px;height:34px;border-radius:10px;background:rgba(255,255,255,.16);display:inline-flex;align-items:center;justify-content:center;font-size:14px;flex-shrink:0}
.brand .b-bot{font-size:12px;opacity:.7}
/* Right form */
.pane{width:400px;max-width:100%;padding:52px 44px;display:flex;flex-direction:column;justify-content:center}
.badge{align-self:flex-start;background:#fdecea;color:#c0392b;font-size:10px;font-weight:700;letter-spacing:.6px;padding:5px 12px;border-radius:100px;margin-bottom:16px}
h2{font-family:'Poppins',sans-serif;font-size:25px;font-weight:700;margin-bottom:7px}
.sub{font-size:13px;color:#8794a3;margin-bottom:26px;line-height:1.5}
.fg{margin-bottom:18px}label{display:block;font-size:12px;font-weight:600;color:#475569;margin-bottom:7px}
.inp{position:relative}
.inp .fa{position:absolute;left:14px;top:50%;transform:translateY(-50%);color:#94a3b8;font-size:13px}
input{width:100%;padding:13px 14px 13px 40px;border:1.5px solid #e5eaf1;border-radius:11px;font-size:14px;outline:none;transition:.15s;background:#f8fafc}
input:focus{border-color:#c0392b;background:#fff;box-shadow:0 0 0 4px rgba(192,57,43,.1)}
.showbtn{position:absolute;right:12px;top:50%;transform:translateY(-50%);border:none;background:none;color:#c0392b;font-size:12px;font-weight:600;cursor:pointer}
.btn{width:100%;padding:14px;background:linear-gradient(135deg,#c0392b,#a5342a);color:#fff;border:none;border-radius:11px;font-family:'Poppins',sans-serif;font-size:15px;font-weight:600;cursor:pointer;margin-top:6px;transition:.15s}
.btn:hover{transform:translateY(-1px);box-shadow:0 8px 20px rgba(192,57,43,.3)}
.error{background:#fff5f5;border:1px solid #fed7d7;color:#c53030;padding:12px 14px;border-radius:10px;font-size:13px;margin-bottom:18px}
.notice{background:#fff8e1;border:1px solid #ffe082;color:#5d4037;padding:12px 14px;border-radius:10px;font-size:13px;margin-bottom:18px}
.link{text-align:center;margin-top:18px;font-size:13px;color:#8794a3}.link a{color:#c0392b;font-weight:600;text-decoration:none}.link a:hover{color:#a5342a}
@media(max-width:760px){.shell{flex-direction:column;min-height:0;max-width:440px}.brand{padding:34px 30px}.brand h1{font-size:24px}.feat{margin-top:18px}.pane{width:100%;padding:34px 30px}}
</style>
</head>
<body>
<div class="shell">
  <div class="brand">
    <div class="b-top">
      <div class="blogo"><img src="../imgs/logo.png" alt="Hangeul"><div class="t">Hangeul<small>Partner Portal</small></div></div>
    </div>
    <div class="b-mid">
      <h1>B2B<br>Partner Access</h1>
      <p class="lead">Submit applications and documents on behalf of your students, track their progress, and stay connected with Hangeul.</p>
      <div class="feat">
        <div><i class="fas fa-user-plus"></i> Add & manage your students</div>
        <div><i class="fas fa-file-arrow-up"></i> Upload application documents</div>
        <div><i class="fas fa-comments"></i> Direct messaging with Hangeul</div>
      </div>
    </div>
    <div class="b-bot">© 2026 Hangeul Korean Language &amp; Visa</div>
  </div>
  <div class="pane">
    <span class="badge">B2B PARTNER ACCESS</span>
    <h2>Welcome back</h2>
    <p class="sub">Sign in to your agency account.</p>
            <form method="POST">
      <div class="fg"><label>Email</label>
        <div class="inp"><i class="fas fa-envelope fa"></i><input name="email" type="email" required placeholder="you@agency.com" value=""></div>
      </div>
      <div class="fg"><label>Password</label>
        <div class="inp"><i class="fas fa-lock fa"></i>
          <input name="password" id="pw" type="password" required style="padding-right:52px" placeholder="••••••••">
          <button type="button" class="showbtn" onclick="var p=document.getElementById('pw');p.type=p.type==='password'?'text':'password';this.textContent=p.type==='password'?'Show':'Hide'">Show</button>
        </div>
      </div>
      <button class="btn" type="submit"><i class="fas fa-right-to-bracket"></i> Login</button>
    </form>
    <p class="link" style="margin-top:16px"><a href="forgot.php">Forgot password?</a></p>
    <p class="link" style="margin-top:8px">Not a partner yet? <a href="/b2b-partnership"><strong>Apply for B2B partnership</strong></a></p>
    <p class="link" style="margin-top:8px"><a href="/">&#8592; Back to Website</a></p>
  </div>
</div>
</body>
</html>
