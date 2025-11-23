<!DOCTYPE html>
<html lang="bn">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>『ƬƘ』 ƬƦΘレ乇メ — Professional Bio</title>

<!-- Fonts & Icons -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Hind+Siliguri:wght@400;600&family=Orbitron:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
  :root{
    --bg-1: #021025;
    --bg-2: #00162b;
    --accent: #00e6ff;
    --accent-2: #7b61ff;
    --muted: #bcd9e6;
  }

  *{box-sizing:border-box;margin:0;padding:0}
  body{
    font-family: 'Poppins',sans-serif;
    background: linear-gradient(180deg,var(--bg-1),var(--bg-2));
    color:white;
    overflow-x:hidden;
  }

  /* Background Particles */
  #bg-wrap{position:fixed;inset:0;z-index:0;pointer-events:none;}
  canvas{width:100%;height:100%;display:block}

  .radial-lights{
    position:fixed;inset:0;
    background:
      radial-gradient(600px 400px at 10% 20%, rgba(123,97,255,0.08), transparent 8%),
      radial-gradient(700px 500px at 90% 80%, rgba(0,230,255,0.06), transparent 10%);
    mix-blend-mode:screen;
    z-index:0;
  }

  /* Center Layout */
  .wrap{
    position:relative; z-index:5;
    min-height:100vh;
    display:flex; align-items:center; justify-content:center;
    padding:30px 20px;
  }

  /* Card */
  .card{
    width:100%;
    max-width:820px;
    display:grid;
    grid-template-columns:1fr 320px;
    gap:32px;
    background:rgba(255,255,255,0.03);
    border-radius:20px;
    padding:32px;
    backdrop-filter:blur(10px);
    border:1px solid rgba(255,255,255,0.04);
    box-shadow:0 10px 50px rgba(0,0,0,0.5);
    animation:fadeUp .8s ease forwards;
    opacity:0; transform:translateY(8px);
  }

  @keyframes fadeUp{
    to{opacity:1;transform:translateY(0)}
  }

  .card:hover{transform:translateY(-6px);transition:0.3s}

  /* LEFT SIDE */
  .brand{display:flex;gap:12px;align-items:center;margin-bottom:10px}

  /* CUSTOM LOGO FIX */
  .logo{
    width:56px;
    height:56px;
    border-radius:12px;
    overflow:hidden;
    display:flex;
    align-items:center;
    justify-content:center;
    background:none !important;
  }
  .logo img{
    width:100%;
    height:100%;
    object-fit:cover;
    border-radius:12px;
  }

  .name{
    font-family:'Orbitron';font-size:32px;margin-top:8px;
  }
  .role{color:var(--accent);font-weight:600;margin-bottom:18px}

  .intro{color:var(--muted);font-size:15px;margin-bottom:16px;min-height:48px}
  .typed{color:#dffcff;font-weight:600}
  .cursor{
    display:inline-block;width:2px;height:18px;background:var(--accent);
    margin-left:4px;animation:blink .9s infinite;
  }
  @keyframes blink{50%{opacity:0}}

  .tags{display:flex;gap:10px;flex-wrap:wrap;margin-bottom:22px}
  .tag{
    background:rgba(255,255,255,0.06);
    padding:8px 12px;font-size:13px;border-radius:20px;color:var(--muted);
  }

  .actions{display:flex;gap:12px;flex-wrap:wrap;margin-bottom:8px}
  .btn{
    background:linear-gradient(90deg,var(--accent),var(--accent-2));
    padding:10px 16px;border-radius:10px;
    text-decoration:none;color:black;font-weight:600;
    display:flex;align-items:center;gap:8px;
  }
  .btn.ghost{
    background:transparent;border:1px solid rgba(255,255,255,0.2);
    color:var(--muted);
  }

  /* RIGHT SIDE */
  .profile-panel{display:flex;flex-direction:column;align-items:center;gap:16px}

  .avatar{
    width:180px;height:180px;border-radius:20px;
    overflow:hidden;border:6px solid rgba(255,255,255,0.06);
  }
  .avatar img{width:100%;height:100%;object-fit:cover}

  .socials{display:flex;gap:14px}
  .socials a{
    width:48px;height:48px;border-radius:50%;
    display:flex;align-items:center;justify-content:center;
    background:rgba(255,255,255,0.05);
    color:white;font-size:18px;
    transition:0.3s;border:1px solid rgba(255,255,255,0.1);
  }
  .socials a:hover{
    transform:translateY(-5px) scale(1.06);
    background:linear-gradient(90deg,var(--accent),var(--accent-2));
    color:black;
  }

  .badge{
    background:rgba(255,255,255,0.06);
    padding:8px 14px;border-radius:20px;font-size:13px;color:var(--muted);
  }

  /* RESPONSIVE */
  @media(max-width:1000px){
    .card{
      grid-template-columns:1fr;
      max-width:600px;
      text-align:center;
    }
    .profile-panel{order:-1}
  }

  @media(max-width:600px){
    .card{padding:24px;gap:20px}
    .avatar{width:150px;height:150px}
    .name{font-size:26px}
  }

</style>
</head>
<body>

<!-- Background -->
<div id="bg-wrap"><canvas id="particles"></canvas></div>
<div class="radial-lights"></div>

<main class="wrap">
  <section class="card">

    <!-- LEFT -->
    <div class="info">
      <div class="brand">
        <div class="logo">
          <img src="BIO_Pic2.jpg" alt="Logo">
        </div>

        <div>
          <h4>『ƬƘ』 ƬƦΘレ乇メ</h4>
          <p style="font-size:13px;color:#bcd9e6">Domain Owner • Cyber Enthusiast</p>
        </div>
      </div>

      <h1 class="name">『ƬƘ』 ƬƦΘレ乇メ</h1>
      <div class="role">DOMAIN OWNER</div>

      <p class="intro">
        EVER TRIED , EVER FALLED NO MATTER; TRY AGAIN, FAIL AGAIN; AGAIN FAIL BETTER —
        <span class="typed" id="typed"></span><span class="cursor"></span>
      </p>

      <div class="tags">
        <div class="tag">Web Dev</div>
        <div class="tag">☠️ Hacking</div>
        <div class="tag">💳CC Carding</div>
        <div class="tag">Open Source</div>
      </div>

      

    </div>

    <!-- RIGHT -->
    <aside class="profile-panel">
      <div class="avatar">
        <img src="BIO_Pic.jpg" alt="Profile">
      </div>

      <div class="socials">
        <a href="https://t.me/t.me/no_limit_x18"></i></a>
        <a href="https://github.com/nolimilx18"></i></a>
        <a href="https://www.instagram.com/no_limits.x18?igsh=aDJ2NHg2N2JkaXJh"></i></a>
      </div>

      <div class="badge">Available for hire</div>
    </aside>

  </section>
</main>

<!-- JS: Background + Typing -->
<script>
/* particles */
(function(){
  const c=document.getElementById("particles"),ctx=c.getContext("2d");
  let w=c.width=innerWidth,h=c.height=innerHeight;
  addEventListener("resize",()=>{w=c.width=innerWidth;h=c.height=innerHeight;init();});
  const P=[],N=80;

  function R(a,b){return Math.random()*(b-a)+a}
  function init(){P.length=0;for(let i=0;i<N;i++){P.push({x:R(0,w),y:R(0,h),vx:R(-0.3,0.3),vy:R(-0.3,0.3),r:R(0.7,2),a:R(0.2,0.8)});} }
  init();

  function draw(){
    ctx.clearRect(0,0,w,h);
    for(const p of P){
      p.x+=p.vx;p.y+=p.vy;
      if(p.x<0)p.x=w;if(p.x>w)p.x=0;if(p.y<0)p.y=h;if(p.y>h)p.y=0;
      ctx.beginPath();
      ctx.fillStyle=`rgba(0,230,255,${p.a})`;
      ctx.arc(p.x,p.y,p.r,0,6.28);ctx.fill();
    }
    requestAnimationFrame(draw);
  }
  draw();
})();

/* typing */
(function(){
  const phrases=[
    "Embrace challenges; effort builds success; learn from every fall.",
    "I build fast, secure & beautiful tools.",
    "Open source enthusiast • Problem solver"
  ];
  const el=document.getElementById("typed");
  let pi=0,ci=0,fwd=true;

  function type(){
    let t=phrases[pi];
    if(fwd){
      el.textContent=t.slice(0,ci++);
      if(ci>t.length){fwd=false;setTimeout(type,900);return;}
    }else{
      el.textContent=t.slice(0,ci--);
      if(ci<0){fwd=true;pi=(pi+1)%phrases.length;ci=0;setTimeout(type,300);return;}
    }
    setTimeout(type,70);
  }
  type();
})();
</script>

</body>
</html>
