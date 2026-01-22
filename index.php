<!DOCTYPE html>
<html>
<head>
  <title>Minimal Platform</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- NAV -->
<div class="nav">
  <div class="nav-inner">
    <strong>Minimal</strong>
    <div>
      <a href="about.php" class="small">About</a>
      &nbsp;&nbsp;
      <a href="login.php" class="small">Login</a>
    </div>
  </div>
</div>

<!-- HERO -->
<div class="container" style="padding-top:80px; padding-bottom:80px;">

  <h1 style="font-size:40px; max-width:720px;">
    Build systems, not noise.
  </h1>

  <p class="small" style="max-width:600px; margin-top:16px;">
    A minimal digital platform designed to replace inefficient manual workflows
    with structured, reliable, and role-based systems.
  </p>

  <div style="margin-top:32px;">
    <a href="login.php">
      <button>Get Started</button>
    </a>
    &nbsp;&nbsp;
    <a href="about.php" class="small">Learn more →</a>
  </div>

</div>

<!-- DIVIDER -->
<div style="border-top:1px solid rgba(255,255,255,0.12);"></div>

<!-- FEATURES -->
<div class="container">

  <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(240px,1fr)); gap:32px;">

    <div class="card">
      <h2>Structured Data</h2>
      <p class="small" style="margin-top:8px;">
        Capture information in a consistent format using validated inputs
        instead of unstructured manual records.
      </p>
    </div>

    <div class="card">
      <h2>Role Based Access</h2>
      <p class="small" style="margin-top:8px;">
        Separate user and admin views ensure better control, visibility,
        and accountability.
      </p>
    </div>

    <div class="card">
      <h2>Minimal by Design</h2>
      <p class="small" style="margin-top:8px;">
        No visual noise. No unnecessary features. Just a clean interface
        focused on the task.
      </p>
    </div>

  </div>

</div>

<!-- DIVIDER -->
<div style="border-top:1px solid rgba(255,255,255,0.12);"></div>

<!-- HOW IT WORKS -->
<div class="container">

  <h2>How it works</h2>
  <br>

  <div style="display:grid; grid-template-columns:repeat(auto-fit,minmax(260px,1fr)); gap:32px;">

    <div>
      <p class="small">01</p>
      <h2>Sign in</h2>
      <p class="small" style="margin-top:6px;">
        Users and administrators authenticate through separate, secure flows.
      </p>
    </div>

    <div>
      <p class="small">02</p>
      <h2>Submit data</h2>
      <p class="small" style="margin-top:6px;">
        Users enter structured information using a simple, guided form.
      </p>
    </div>

    <div>
      <p class="small">03</p>
      <h2>Manage & review</h2>
      <p class="small" style="margin-top:6px;">
        Admins view all records in one place and maintain system oversight.
      </p>
    </div>

  </div>

</div>

<!-- FOOTER -->
<div style="border-top:1px solid rgba(255,255,255,0.12);">
  <div class="container" style="display:flex; justify-content:space-between; align-items:center;">
    <p class="small">© <?php echo date("Y"); ?> Minimal Platform</p>
    <p class="small">Built for clarity</p>
  </div>
</div>

</body>
</html>
