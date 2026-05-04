<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Artisan Hearth - Home</title>
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
  
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['Inter', 'ui-sans-serif', 'system-ui', 'sans-serif'],
            serif: ['Playfair Display', 'ui-serif', 'Georgia', 'serif'],
          }
        }
      }
    }
  </script>
</head>
<body class="min-h-screen bg-[#F0EBE1] font-sans text-[#2c2826] overflow-x-hidden flex flex-col">

  <nav class="flex items-center justify-between px-8 py-6 max-w-7xl mx-auto w-full border-b border-[#2c2826]/10 shrink-0">
    <a href="home.php" class="text-2xl font-serif font-semibold text-[#8B3E2F]">
      Artisan Hearth
    </a>
    <div class="hidden md:flex gap-8 text-xs font-semibold tracking-widest text-[#6e685f]">
      <a href="product.php" class="hover:text-[#2c2826] transition-colors">PRODUCTS</a>
      <a href="#" class="hover:text-[#2c2826] transition-colors">TOOLS</a>
      <a href="#" class="hover:text-[#2c2826] transition-colors">ARTISTS</a>
      <a href="#" class="hover:text-[#2c2826] transition-colors">WORKSHOPS</a>
    </div>
    <div class="flex gap-4 text-[#8B3E2F]">
      <button class="hover:opacity-75 transition-opacity">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
      </button>
      <button class="hover:opacity-75 transition-opacity">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
      </button>
    </div>
  </nav>

  <main class="flex-1 w-full duration-700 opacity-100">
    
    <section class="max-w-7xl mx-auto px-8 py-20 pb-0 flex flex-col md:flex-row gap-16 items-start">
      <div class="flex-1 pt-12">
        <div class="text-xs font-bold tracking-[0.2em] text-[#8B3E2F] mb-6">
          EST. 2024 • KILN FIRED TRADITIONS
        </div>
        <h1 class="font-serif text-6xl md:text-7xl lg:text-[5.5rem] leading-[1.1] font-medium mb-10 text-[#1a1817]">
          Handcrafted for <br/> your home, <span class="italic">fired <br/> with intent.</span>
        </h1>
        <div class="flex items-center gap-6">
          <a href="product.php" class="bg-[#A44322] hover:bg-[#8e3a1d] text-white px-8 py-4 rounded font-medium transition-colors">
            Shop the Collection
          </a>
          <button class="font-medium text-[#A44322] border-b border-[#A44322] pb-1 hover:opacity-75 transition-opacity">
            Our Process
          </button>
        </div>
      </div>
      
      <div class="flex-1 relative w-full aspect-[4/5] md:aspect-auto md:h-[600px]">
        <img 
          src="../images/artist_image.jpeg" 
          alt="" 
          class="w-full h-full object-cover rounded-xl"
        />
        <div class="absolute -left-12 -bottom-8 bg-[#D3DEC3] p-8 max-w-[320px] rounded-xl shadow-lg border border-[#c4d1b1]">
          <p class="font-serif italic text-xl mb-4 text-[#2B3B1B]">
            "The clay remembers every touch, every breath of the maker."
          </p>
          <p class="text-xs font-semibold tracking-wider text-[#4A5D33]">
            — MASTER CERAMIST ELENA V.
          </p>
        </div>
      </div>
    </section>

    <section class="max-w-7xl mx-auto px-8 pt-32 pb-12 flex flex-col md:flex-row justify-between items-end gap-8 relative z-20">
      <div class="max-w-md">
        <h2 class="font-serif text-5xl mb-4 font-medium text-[#1a1817]">The Curation</h2>
        <p class="text-[#6e685f] leading-relaxed text-sm w-3/4">
          Every piece is selected for its balance of utility and sculptural beauty. Form meets function at the hearth.
        </p>
      </div>
      <div class="flex-grow border-b border-[#2c2826]/10 mb-2"></div>
    </section>

    <section class="max-w-7xl mx-auto px-8 relative pb-32">
      <div class="absolute bottom-0 left-0 right-0 h-3/4 bg-[#E8E2D6] -z-10 rounded-3xl" style="transform: translateY(10%)"></div>
      
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 relative z-10">
        <div class="h-[800px]">
          <img 
            src="https://images.unsplash.com/photo-1610701596007-11502861dcfa?auto=format&fit=crop&q=80&w=1200" 
            alt="Plates" 
            class="w-full h-full object-cover rounded-xl grayscale-[20%]"
          />
        </div>
        <div class="flex flex-col gap-6 h-[800px]">
           <div class="relative flex-1 rounded-xl overflow-hidden group">
            <img 
              src="../images/pottery_items.jpeg" 
              alt="" 
              class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
            />
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex flex-col justify-end p-8">
              <a href="product.php"><h3 class="text-white font-serif text-3xl mb-1 hover:opacity-80 transition-opacity">Decorative Art</h3></a>
              <p class="text-white/80 text-xs tracking-widest uppercase font-semibold">Statement Sculptures</p>
            </div>
          </div>
          <div class="relative flex-1 rounded-xl overflow-hidden group">
            <img 
              src="../images/pottery_tools.jpeg" 
              alt="Tools" 
              class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105 grayscale-[30%]"
            />
             <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent flex flex-col justify-end p-8">
              <h3 class="text-white font-serif text-3xl mb-1">Handbuilt Tools</h3>
              <p class="text-white/80 text-xs tracking-widest uppercase font-semibold">Crafting Essentials</p>
            </div>
          </div>
        </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 relative z-20 -mt-40 xl:-mt-64">
        
        <div class="flex flex-col gap-4 mt-20 md:mt-32">
          <div class="aspect-[4/5] rounded-xl overflow-hidden shadow-2xl">
            <img 
              src="https://images.unsplash.com/photo-1542273917363-3b1817f69a2d?auto=format&fit=crop&q=80&w=800" 
              alt="Sora Park art" 
              class="w-full h-full object-cover grayscale"
            />
          </div>
          <div class="bg-[#F0EBE1]/90 backdrop-blur-sm p-4 rounded-xl shadow-sm">
             <h4 class="font-serif text-2xl mb-2 text-[#1a1817]">Sora Park</h4>
             <p class="text-sm text-[#6e685f] mb-4">Specializing in Korean Celadon techniques with a modern minimalist twist.</p>
             <div class="flex flex-wrap gap-2">
               <span class="px-3 py-1 bg-[#D3DEC3] text-[#4A5D33] text-[10px] uppercase tracking-wider font-bold rounded-full">Celadon</span>
               <span class="px-3 py-1 bg-[#D3DEC3] text-[#4A5D33] text-[10px] uppercase tracking-wider font-bold rounded-full">Wheel Throwing</span>
             </div>
          </div>
        </div>

        <div class="flex flex-col gap-4">
          <div class="aspect-[4/5] rounded-xl overflow-hidden shadow-2xl">
            <img 
              src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&q=80&w=800" 
              alt="Marcus Thorne" 
              class="w-full h-full object-cover grayscale"
            />
          </div>
           <div class="bg-[#F0EBE1]/90 backdrop-blur-sm p-4 rounded-xl shadow-sm">
             <h4 class="font-serif text-2xl mb-2 text-[#1a1817]">Marcus Thorne</h4>
             <p class="text-sm text-[#6e685f] mb-4">Expert in high-fire stoneware and experimental mineral glazes inspired by geology.</p>
             <div class="flex flex-wrap gap-2">
               <span class="px-3 py-1 bg-[#D3DEC3] text-[#4A5D33] text-[10px] uppercase tracking-wider font-bold rounded-full">Stoneware</span>
               <span class="px-3 py-1 bg-[#D3DEC3] text-[#4A5D33] text-[10px] uppercase tracking-wider font-bold rounded-full">Glaze Alchemy</span>
             </div>
          </div>
        </div>

        <div class="flex flex-col gap-4 mt-20 md:mt-32">
          <div class="aspect-[4/5] rounded-xl overflow-hidden shadow-2xl">
            <img 
              src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&q=80&w=800" 
              alt="Lila Chen" 
              class="w-full h-full object-cover grayscale"
            />
          </div>
           <div class="bg-[#F0EBE1]/90 backdrop-blur-sm p-4 rounded-xl shadow-sm">
             <h4 class="font-serif text-2xl mb-2 text-[#1a1817]">Lila Chen</h4>
             <p class="text-sm text-[#6e685f] mb-4">Focuses on functional terracotta for sustainable living and indoor gardening.</p>
             <div class="flex flex-wrap gap-2">
               <span class="px-3 py-1 bg-[#D3DEC3] text-[#4A5D33] text-[10px] uppercase tracking-wider font-bold rounded-full">Terracotta</span>
               <span class="px-3 py-1 bg-[#D3DEC3] text-[#4A5D33] text-[10px] uppercase tracking-wider font-bold rounded-full">Hand Building</span>
             </div>
          </div>
        </div>

      </div>
    </section>

    <section class="bg-[#F0EBE1] py-24 border-t border-b border-[#2c2826]/10">
      <div class="max-w-7xl mx-auto px-8 flex flex-col md:flex-row gap-16 items-center">
        <div class="flex-1">
          <h2 class="font-serif text-5xl mb-6 font-medium text-[#1a1817]">Master the Wheel</h2>
          <p class="text-[#6e685f] text-lg mb-10 leading-relaxed max-w-md">
            Join our hands-on workshops in the heart of the city. From beginner foundations to advanced glazing chemistry, our resident artists guide you through every stage of the fire.
          </p>

          <div class="flex flex-col gap-4">
            <div class="bg-[#FCFAF7] p-6 rounded-xl flex items-start gap-5 shadow-sm">
              <div class="bg-[#F5E6E0] p-3 rounded-lg text-[#A44322]">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
              </div>
              <div>
                <h4 class="font-medium text-lg text-[#1a1817] mb-1">Introduction to Porcelain</h4>
                <p class="text-sm text-[#6e685f]">Nov 12th • 3 Hours • 8 Seats Remaining</p>
              </div>
            </div>

            <div class="bg-[#FCFAF7] p-6 rounded-xl flex items-start gap-5 shadow-sm">
              <div class="bg-[#F5E6E0] p-3 rounded-lg text-[#A44322]">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
              </div>
              <div>
                <h4 class="font-medium text-lg text-[#1a1817] mb-1">The Chemistry of Glaze</h4>
                <p class="text-sm text-[#6e685f]">Nov 18th • Full Day Intensive • 2 Seats Remaining</p>
              </div>
            </div>
          </div>

          <button class="mt-8 bg-[#F5E6E0] hover:bg-[#ebd2c7] text-[#A44322] font-semibold px-8 py-4 rounded transition-colors w-full md:w-auto text-center">
            View Full Schedule
          </button>
        </div>

        <div class="flex-1 relative">
          <div class="aspect-square rounded-full overflow-hidden shadow-2xl relative">
            <img 
              src="../images/workshop_banner.jpeg" 
              alt="" 
              class="w-full h-full object-cover"
            />
            <div class="absolute inset-0 bg-black/10 mix-blend-multiply rounded-full pointer-events-none"></div>
          </div>
          <div class="absolute top-4 -right-4 bg-[#A44322] text-white w-32 h-32 rounded-full flex flex-col items-center justify-center transform rotate-12 shadow-xl border-4 border-[#F0EBE1]">
            <span class="text-[10px] font-bold tracking-widest uppercase mb-1">New Session</span>
            <span class="font-serif italic text-xl leading-tight text-center">Booking<br/>Open</span>
          </div>
        </div>
      </div>
    </section>
  </main>

  <footer class="bg-[#EAE4D8] py-16 shrink-0 w-full mt-auto">
    <div class="max-w-7xl mx-auto px-8 grid grid-cols-1 md:grid-cols-4 gap-12">
      
      <div class="md:col-span-1 flex flex-col gap-6">
         <div class="text-xl font-serif font-semibold text-[#8B3E2F]">
          Artisan Hearth
        </div>
        <p class="text-sm text-[#6e685f] leading-relaxed pr-4">
          A sanctuary for the clay-stained and the clay-curious. We believe in the slow power of hand and heat.
        </p>
        <div class="flex gap-4 text-[#A44322]">
          <a href="#" class="hover:opacity-75 transition-opacity">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
          </a>
          <a href="#" class="hover:opacity-75 transition-opacity">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
          </a>
          <a href="#" class="hover:opacity-75 transition-opacity">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
          </a>
        </div>
      </div>

      <div class="md:col-span-1 flex flex-col gap-4 pl-0 md:pl-8">
        <h5 class="text-xs font-bold tracking-widest uppercase text-[#1a1817] mb-2">Explore</h5>
        <a href="product.php" class="text-sm text-[#6e685f] hover:text-[#2c2826] transition-colors">Our Collection</a>
        <a href="#" class="text-sm text-[#6e685f] hover:text-[#2c2826] transition-colors">About Our Clay</a>
        <a href="#" class="text-sm text-[#6e685f] hover:text-[#2c2826] transition-colors">Featured Artists</a>
        <a href="#" class="text-sm text-[#6e685f] hover:text-[#2c2826] transition-colors">Exhibitions</a>
      </div>

      <div class="md:col-span-1 flex flex-col gap-4 pl-0 md:pl-8">
         <h5 class="text-xs font-bold tracking-widest uppercase text-[#1a1817] mb-2">Support</h5>
        <a href="#" class="text-sm text-[#6e685f] hover:text-[#2c2826] transition-colors">Shipping & Returns</a>
        <a href="#" class="text-sm text-[#6e685f] hover:text-[#2c2826] transition-colors">Privacy</a>
        <a href="#" class="text-sm text-[#6e685f] hover:text-[#2c2826] transition-colors">Contact Us</a>
        <a href="#" class="text-sm text-[#6e685f] hover:text-[#2c2826] transition-colors">FAQ</a>
      </div>

      <div class="md:col-span-1 bg-white/40 p-6 rounded-xl flex flex-col gap-4">
         <h5 class="text-xs font-bold tracking-widest uppercase text-[#1a1817]">Join the Hearth</h5>
         <p class="text-xs text-[#6e685f] leading-relaxed">
           Receive stories from the kiln and first access to new collection drops.
         </p>
         <form class="flex mt-2">
           <input 
              type="email" 
              placeholder="Email Address" 
              class="bg-white px-4 py-2 text-sm max-w-[160px] outline-none text-[#2c2826] placeholder-[#a9a49c]"
            />
           <button type="submit" class="bg-[#A44322] hover:bg-[#8e3a1d] text-white px-4 py-2 text-sm font-semibold transition-colors shrink-0">
             JOIN
           </button>
         </form>
      </div>
    </div>
    
    <div class="max-w-7xl mx-auto px-8 mt-16 pt-8 border-t border-[#2c2826]/10 text-center text-xs text-[#a9a49c]">
      © 2024 Artisan Hearth. Formed by hand, fired with intent.
    </div>
  </footer>
</body>
</html>