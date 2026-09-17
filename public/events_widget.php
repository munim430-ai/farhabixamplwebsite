<!DOCTYPE html>
<html><head>
<meta charset="UTF-8">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Inter:wght@400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
*{margin:0;padding:0;box-sizing:border-box}
body{font-family:'Inter',sans-serif;background:#fff}
.ev-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;padding:10px}
.ev-card{background:#fff;border-radius:16px;overflow:hidden;box-shadow:0 2px 16px rgba(0,0,0,.06);border:1px solid #f0f0f0;transition:transform .3s}
.ev-card:hover{transform:translateY(-4px);box-shadow:0 8px 32px rgba(0,0,0,.1)}
.ev-card-img{width:100%;height:180px;object-fit:cover;display:block}
.ev-card-img-placeholder{width:100%;height:180px;background:linear-gradient(135deg,#0D2137,#1a3a5c);display:flex;align-items:center;justify-content:center;color:rgba(255,255,255,.3);font-size:48px}
.ev-card-body{padding:20px 24px}
.ev-card-cat{display:inline-block;padding:3px 10px;border-radius:100px;font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.5px;margin-bottom:10px}
.ev-cat-seminar{background:#fff8e1;color:#e65100}
.ev-cat-sports{background:#e8f5e9;color:#2e7d32}
.ev-cat-admission{background:#e8f4fd;color:#1565c0}
.ev-cat-workshop{background:#fce4ec;color:#c62828}
.ev-cat-cultural{background:#f3e5f5;color:#7b1fa2}
.ev-cat-other{background:#f0f4f8;color:#555}
.ev-card-title{font-family:'Poppins',sans-serif;font-size:16px;font-weight:700;color:#0D2137;margin-bottom:8px;line-height:1.4}
.ev-card-desc{font-size:13px;color:#666;line-height:1.7;margin-bottom:14px;max-height:200px;overflow-y:auto;padding-right:6px}
.ev-card-desc::-webkit-scrollbar{width:4px}
.ev-card-desc::-webkit-scrollbar-thumb{background:#ccc;border-radius:4px}
.read-more{font-size:12px;color:#C0392B;font-weight:600;cursor:pointer;border:none;background:none;padding:0;margin-bottom:14px}
.ev-card-meta{display:flex;flex-direction:column;gap:4px;font-size:12px;color:#888}
.ev-card-meta i{color:#C0392B;width:16px}
@media(max-width:1024px){.ev-grid{grid-template-columns:repeat(2,1fr)}}
@media(max-width:600px){.ev-grid{grid-template-columns:1fr}.ev-card-body{padding:14px 16px}}
</style>
</head><body>
<div class="ev-grid">
<div class="ev-card fi">
    <div style="position:relative;overflow:hidden;height:180px">
    <div id="evS3" style="display:flex;transition:transform .5s">
            <img src="imgs/event_1776413306_0.jpeg" style="width:100%;height:180px;object-fit:cover;flex-shrink:0">
            <img src="imgs/event_1776413306_1.jpeg" style="width:100%;height:180px;object-fit:cover;flex-shrink:0">
            <img src="imgs/event_1776413306_2.jpg" style="width:100%;height:180px;object-fit:cover;flex-shrink:0">
          </div>
    <div style="position:absolute;bottom:6px;right:8px;background:rgba(0,0,0,.6);color:#fff;padding:2px 8px;border-radius:10px;font-size:10px;font-weight:600">3 photos</div>
  </div>
  
  <div class="ev-card-body">
    <span class="ev-card-cat ev-cat-seminar">Seminar</span>
    <h3 class="ev-card-title">Spot Admission &amp; Seminar</h3>
        <p class="ev-card-desc">Alhamdulillah, we completed the Mokwon University seminar and spot admission session.<br />
Sincere thanks to all our partners and students for your support and participation in making this event a success.</p>
        <div class="ev-card-meta">
      <div><i class="fas fa-calendar"></i> 01 Apr 2026</div>
      <div><i class="fas fa-clock"></i> 10:00 AM to 5:00 PM</div>      <div><i class="fas fa-map-marker-alt"></i> Hotel Lakeshore Heights Dhaka</div>    </div>
  </div>
</div>
<div class="ev-card fi">
    <img src="imgs/event_1776410848.jpg" class="ev-card-img" alt="">
  
  <div class="ev-card-body">
    <span class="ev-card-cat ev-cat-other">Event</span>
    <h3 class="ev-card-title">CLEANING THE STREET IN DHAKA</h3>
        <p class="ev-card-desc">আজ আমাদের Hangeul Korean Language &amp; Visa এর কিছু সংখ্যক শিক্ষার্থীদের অংশগ্রহণে একটি সুন্দর Cleaning Project আয়োজন করা হয়। 🌱<br />
এই প্রজেক্টের মাধ্যমে শিক্ষার্থীরা নিজেদের দায়িত্ববোধ ও সামাজিক সচেতনতার একটি দৃষ্টান্ত স্থাপন করেছে। তারা একসাথে পরিবেশ পরিষ্কার করে একটি পরিচ্ছন্ন ও সুন্দর পরিবেশ গড়ে তোলার বার্তা দিয়েছে।<br />
এই প্রজেক্টে আমাদের CEO Mr. Kai Shim এবং Rashid MD Mamun Ur (Head of Bangladesh Office) উপস্থিত ছিলেন।<br />
আমরা বিশ্বাস করি, শিক্ষার পাশাপাশি এমন উদ্যোগ শিক্ষার্থীদেরকে আরও দায়িত্বশীল ও সচেতন নাগরিক হিসেবে গড়ে তুলতে সাহায্য করে।</p>
        <div class="ev-card-meta">
      <div><i class="fas fa-calendar"></i> 04 Apr 2026</div>
      <div><i class="fas fa-clock"></i> 9:00AM</div>      <div><i class="fas fa-map-marker-alt"></i> DHAKA</div>    </div>
  </div>
</div>
<div class="ev-card fi">
    <div style="position:relative;overflow:hidden;height:180px">
    <div id="evS4" style="display:flex;transition:transform .5s">
            <img src="imgs/event_1776413505_0.jpg" style="width:100%;height:180px;object-fit:cover;flex-shrink:0">
            <img src="imgs/event_1776413505_1.jpg" style="width:100%;height:180px;object-fit:cover;flex-shrink:0">
            <img src="imgs/event_1776413505_2.jpg" style="width:100%;height:180px;object-fit:cover;flex-shrink:0">
          </div>
    <div style="position:absolute;bottom:6px;right:8px;background:rgba(0,0,0,.6);color:#fff;padding:2px 8px;border-radius:10px;font-size:10px;font-weight:600">3 photos</div>
  </div>
  
  <div class="ev-card-body">
    <span class="ev-card-cat ev-cat-workshop">Workshop</span>
    <h3 class="ev-card-title">Workshop with Employees</h3>
        <p class="ev-card-desc">Hangeul Korean Language &amp; Visa টিমের সার্বিক সেবার মান আরও উন্নত করার লক্ষ্যে একটি গুরুত্বপূর্ণ মিটিং করা হয়েছে। এই মিটিংয়ে উপস্থিত ছিলেন আমাদের সম্মানিত CEO Mr. Kai Shim এবং Rashid MD Mamun Ur (Head of Bangladesh Office)<br />
স্টুডেন্টদের কল রিসিভ সংক্রান্ত অভিযোগসহ অন্যান্য বিষয়গুলো গভীরভাবে পর্যালোচনা করা হয়েছে। পাশাপাশি, কিভাবে সার্ভিস আরও উন্নত করা যায় এবং শিক্ষার্থীদের জন্য আরও বেশি সুযোগ-সুবিধা নিশ্চিত করা যায়—সে বিষয়েও বিস্তারিত আলোচনা করা হয়েছে।<br />
আমরা প্রতিশ্রুতিবদ্ধ, আপনাদের আস্থা ও সন্তুষ্টিই আমাদের সর্বোচ্চ!</p>
        <div class="ev-card-meta">
      <div><i class="fas fa-calendar"></i> 04 Apr 2026</div>
      <div><i class="fas fa-clock"></i> 6:00 PM</div>      <div><i class="fas fa-map-marker-alt"></i> Hangeul Global Learning Center Dhaka</div>    </div>
  </div>
</div>
<div class="ev-card fi">
    <div style="position:relative;overflow:hidden;height:180px">
    <div id="evS8" style="display:flex;transition:transform .5s">
            <img src="imgs/event_1785059406_0.jpg" style="width:100%;height:180px;object-fit:cover;flex-shrink:0">
            <img src="imgs/event_1785059406_1.jpg" style="width:100%;height:180px;object-fit:cover;flex-shrink:0">
            <img src="imgs/event_1785059406_2.jpg" style="width:100%;height:180px;object-fit:cover;flex-shrink:0">
            <img src="imgs/event_1785059406_3.jpeg" style="width:100%;height:180px;object-fit:cover;flex-shrink:0">
            <img src="imgs/event_1785059406_4.jpg" style="width:100%;height:180px;object-fit:cover;flex-shrink:0">
            <img src="imgs/event_1785059406_5.jpg" style="width:100%;height:180px;object-fit:cover;flex-shrink:0">
            <img src="imgs/event_1785059406_6.jpeg" style="width:100%;height:180px;object-fit:cover;flex-shrink:0">
            <img src="imgs/event_1785059406_7.jpg" style="width:100%;height:180px;object-fit:cover;flex-shrink:0">
            <img src="imgs/event_1785059406_8.jpg" style="width:100%;height:180px;object-fit:cover;flex-shrink:0">
          </div>
    <div style="position:absolute;bottom:6px;right:8px;background:rgba(0,0,0,.6);color:#fff;padding:2px 8px;border-radius:10px;font-size:10px;font-weight:600">9 photos</div>
  </div>
  
  <div class="ev-card-body">
    <span class="ev-card-cat ev-cat-seminar">Seminar</span>
    <h3 class="ev-card-title">Two Seminars with Korea Tech University in Dhaka</h3>
        <p class="ev-card-desc">We successfully organized two educational seminars in collaboration with KOREATECH University—one at Hotel The Pearl and another at Dhaka College.<br />
<br />
During the seminars, representatives from KOREATECH University shared detailed information about the university, available academic programs, admission requirements, scholarships, career opportunities, and the overall student experience in South Korea. Students also had the opportunity to ask questions directly and receive guidance regarding their future study plans.<br />
<br />
The events created an excellent platform for Bangladeshi students to learn more about higher education opportunities in South Korea and communicate directly with university representatives. We sincerely thank the KOREATECH University delegation, the authorities of Hotel The Pearl and Dhaka College, and all the students and guardians who participated and contributed to the success of these seminars.</p>
        <div class="ev-card-meta">
      <div><i class="fas fa-calendar"></i> 24 Jun 2026</div>
      <div><i class="fas fa-clock"></i> 10:00 AM to 5:00 PM</div>      <div><i class="fas fa-map-marker-alt"></i> DHAKA</div>    </div>
  </div>
</div>
</div>

<script>
(function(){var t=document.getElementById('evS3'),i=0,n=3;if(t)setInterval(function(){i=(i+1)%n;t.style.transform='translateX(-'+(i*100)+'%)'},3000)})();
(function(){var t=document.getElementById('evS4'),i=0,n=3;if(t)setInterval(function(){i=(i+1)%n;t.style.transform='translateX(-'+(i*100)+'%)'},3000)})();
(function(){var t=document.getElementById('evS8'),i=0,n=9;if(t)setInterval(function(){i=(i+1)%n;t.style.transform='translateX(-'+(i*100)+'%)'},3000)})();
</script>
</body></html>
