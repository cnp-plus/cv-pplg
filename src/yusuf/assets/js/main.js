const typedEl=document.getElementById('typed');
const phrases=window.TYPED_PHRASES||[];
let pi=0,ci=0,del=false;
(function type(){
  if(!typedEl||!phrases.length) return;
  const cur=phrases[pi];
  typedEl.textContent=del?cur.slice(0,ci--):cur.slice(0,ci++);
  let d=del?40:90;
  if(!del&&ci===cur.length+1){d=1500;del=true}
  else if(del&&ci===0){del=false;pi=(pi+1)%phrases.length;d=400}
  setTimeout(type,d);
})();
const prog=document.getElementById('progress');
addEventListener('scroll',()=>{
  const h=document.documentElement;
  const p=(h.scrollTop/(h.scrollHeight-h.clientHeight))*100;
  if(prog) prog.style.width=p+'%';
  document.querySelectorAll('.nav-links a').forEach(a=>{
    const s=document.querySelector(a.getAttribute('href'));
    if(s){
      const top=s.offsetTop-120;
      a.classList.toggle('active',scrollY>=top&&scrollY<top+s.offsetHeight);
    }
  });
},{passive:true});
const ham=document.getElementById('ham'),links=document.getElementById('navLinks');
if(ham) ham.onclick=()=>links.classList.toggle('open');
const themeBtn=document.getElementById('themeBtn');
const saved=localStorage.getItem('theme');
if(saved) document.documentElement.setAttribute('data-theme',saved);
if(themeBtn){
  themeBtn.innerHTML=saved==='dark'?'<i class="fa-solid fa-sun"></i>':'<i class="fa-solid fa-moon"></i>';
  themeBtn.onclick=()=>{
    const cur=document.documentElement.getAttribute('data-theme')==='dark'?'light':'dark';
    document.documentElement.setAttribute('data-theme',cur);
    localStorage.setItem('theme',cur);
    themeBtn.innerHTML=cur==='dark'?'<i class="fa-solid fa-sun"></i>':'<i class="fa-solid fa-moon"></i>';
  };
}
const obs=new IntersectionObserver(ents=>{
  ents.forEach(e=>{
    if(e.isIntersecting){
      e.target.classList.add('in');
      e.target.querySelectorAll('.fill').forEach(f=>f.style.width=f.dataset.width);
      e.target.querySelectorAll('.count').forEach(c=>{
        let n=0,t=+c.dataset.target,step=t/40;
        const iv=setInterval(()=>{n+=step;if(n>=t){n=t;clearInterval(iv)}c.textContent=Math.round(n)},30);
      });
      obs.unobserve(e.target);
    }
  });
},{threshold:.2});
document.querySelectorAll('.reveal,.hero-grid').forEach(el=>obs.observe(el));
document.querySelectorAll('.fill').forEach(f=>{if(f.closest('.reveal.in')) f.style.width=f.dataset.width});
document.querySelectorAll('#skillFilter .pill').forEach(b=>{
  b.onclick=()=>{
    document.querySelectorAll('#skillFilter .pill').forEach(x=>x.classList.remove('active'));b.classList.add('active');
    const v=b.dataset.f;
    document.querySelectorAll('.skill-card').forEach(c=>{c.style.display=v==='all'||c.dataset.cat===v?'block':'none'});
  };
});
document.querySelectorAll('#projFilter .pill').forEach(b=>{
  b.onclick=()=>{
    document.querySelectorAll('#projFilter .pill').forEach(x=>x.classList.remove('active'));b.classList.add('active');
    const v=b.dataset.p;
    document.querySelectorAll('.proj').forEach(c=>{
      const show=v==='all'||c.dataset.cat===v;
      c.style.display=show?'block':'none';
      if(show) c.animate([{transform:'scale(.96)',opacity:.6},{transform:'scale(1)',opacity:1}],{duration:300});
    });
  };
});
window.validateForm=function(e){
  const f=e.target;
  if(f.message.value.trim().length<10){alert('Pesan minimal 10 karakter');return false}
  return true;
};
document.querySelectorAll('a[href^="#"]').forEach(a=>{
  a.addEventListener('click',e=>{
    const id=a.getAttribute('href');
    if(id.length>1){e.preventDefault();document.querySelector(id)?.scrollIntoView({behavior:'smooth'});links?.classList.remove('open')}
  });
});
