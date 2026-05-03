<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Artisan Hearth - Products</title>
  
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
    <a href="index.html" class="text-2xl font-serif font-semibold text-[#8B3E2F]">
      Artisan Hearth
    </a>
    <div class="hidden md:flex gap-8 text-xs font-semibold tracking-widest text-[#6e685f]">
      <a href="products.html" class="hover:text-[#2c2826] transition-colors">PRODUCTS</a>
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
    <div class="max-w-7xl mx-auto px-8 py-20">
      <div class="mb-16">
        <h1 class="font-serif text-5xl md:text-6xl font-medium mb-6 text-[#1a1817]">The Collection</h1>
        <p class="text-[#6e685f] text-lg max-w-xl">
          Explore our complete range of handcrafted ceramics. Each piece is unique, reflecting the touch of the maker and the unpredictable nature of the fire.
        </p>
      </div>

      <div class="flex flex-wrap gap-4 mb-12">
        <button class="text-xs font-semibold tracking-widest uppercase px-6 py-2 rounded-full border border-[#2c2826]/20 text-[#6e685f] hover:bg-[#8B3E2F] hover:border-[#8B3E2F] hover:text-white transition-colors">All</button>
        <button class="text-xs font-semibold tracking-widest uppercase px-6 py-2 rounded-full border border-[#2c2826]/20 text-[#6e685f] hover:bg-[#8B3E2F] hover:border-[#8B3E2F] hover:text-white transition-colors">Plates</button>
        <button class="text-xs font-semibold tracking-widest uppercase px-6 py-2 rounded-full border border-[#2c2826]/20 text-[#6e685f] hover:bg-[#8B3E2F] hover:border-[#8B3E2F] hover:text-white transition-colors">Bowls</button>
        <button class="text-xs font-semibold tracking-widest uppercase px-6 py-2 rounded-full border border-[#2c2826]/20 text-[#6e685f] hover:bg-[#8B3E2F] hover:border-[#8B3E2F] hover:text-white transition-colors">Planters</button>
        <button class="text-xs font-semibold tracking-widest uppercase px-6 py-2 rounded-full border border-[#2c2826]/20 text-[#6e685f] hover:bg-[#8B3E2F] hover:border-[#8B3E2F] hover:text-white transition-colors">Vases</button>
        <button class="text-xs font-semibold tracking-widest uppercase px-6 py-2 rounded-full border border-[#2c2826]/20 text-[#6e685f] hover:bg-[#8B3E2F] hover:border-[#8B3E2F] hover:text-white transition-colors">Teapots</button>
      </div>

      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-x-8 gap-y-16">
        
        <div class="group cursor-pointer">
          <div class="relative aspect-[4/5] rounded-xl overflow-hidden shadow-sm mb-4 bg-[#E8E2D6]">
            <img src="https://images.unsplash.com/photo-1610701596007-11502861dcfa?auto=format&fit=crop&q=80&w=600" alt="Speckled White Plate" class="w-full h-full object-cover grayscale-[15%] transition-transform duration-700 group-hover:scale-105" />
            <div class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
              <button class="bg-white text-[#8B3E2F] p-4 rounded-full translate-y-4 group-hover:translate-y-0 transition-transform duration-300 opacity-0 group-hover:opacity-100 mt-auto mb-8 shadow-xl">
                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
              </button>
            </div>
          </div>
          <div class="flex justify-between items-start">
            <div>
              <h3 class="font-medium text-lg text-[#1a1817] mb-1">Speckled White Plate</h3>
              <p class="text-xs tracking-widest text-[#6e685f] uppercase">Plate</p>
            </div>
            <p class="font-serif text-lg text-[#8B3E2F]">$45</p>
          </div>
        </div>

        <div class="group cursor-pointer">
          <div class="relative aspect-[4/5] rounded-xl overflow-hidden shadow-sm mb-4 bg-[#E8E2D6]">
            <img src="https://images.unsplash.com/photo-1628151528620-ebbf27c00e16?auto=format&fit=crop&q=80&w=600" alt="Celadon Glaze Bowl" class="w-full h-full object-cover grayscale-[15%] transition-transform duration-700 group-hover:scale-105" />
            <div class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
              <button class="bg-white text-[#8B3E2F] p-4 rounded-full translate-y-4 group-hover:translate-y-0 transition-transform duration-300 opacity-0 group-hover:opacity-100 mt-auto mb-8 shadow-xl">
                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
              </button>
            </div>
          </div>
          <div class="flex justify-between items-start">
            <div>
              <h3 class="font-medium text-lg text-[#1a1817] mb-1">Celadon Glaze Bowl</h3>
              <p class="text-xs tracking-widest text-[#6e685f] uppercase">Bowl</p>
            </div>
            <p class="font-serif text-lg text-[#8B3E2F]">$65</p>
          </div>
        </div>

        <div class="group cursor-pointer">
          <div class="relative aspect-[4/5] rounded-xl overflow-hidden shadow-sm mb-4 bg-[#E8E2D6]">
            <img src="https://images.unsplash.com/photo-1590204278455-d4197e937d37?auto=format&fit=crop&q=80&w=600" alt="Terracotta Planter" class="w-full h-full object-cover grayscale-[15%] transition-transform duration-700 group-hover:scale-105" />
            <div class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
              <button class="bg-white text-[#8B3E2F] p-4 rounded-full translate-y-4 group-hover:translate-y-0 transition-transform duration-300 opacity-0 group-hover:opacity-100 mt-auto mb-8 shadow-xl">
                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
              </button>
            </div>
          </div>
          <div class="flex justify-between items-start">
            <div>
              <h3 class="font-medium text-lg text-[#1a1817] mb-1">Terracotta Planter</h3>
              <p class="text-xs tracking-widest text-[#6e685f] uppercase">Planter</p>
            </div>
            <p class="font-serif text-lg text-[#8B3E2F]">$85</p>
          </div>
        </div>

        <div class="group cursor-pointer">
          <div class="relative aspect-[4/5] rounded-xl overflow-hidden shadow-sm mb-4 bg-[#E8E2D6]">
            <img src="https://images.unsplash.com/photo-1603598715878-eb287eacdfae?auto=format&fit=crop&q=80&w=600" alt="Matte Black Tumbler" class="w-full h-full object-cover grayscale-[15%] transition-transform duration-700 group-hover:scale-105" />
            <div class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
              <button class="bg-white text-[#8B3E2F] p-4 rounded-full translate-y-4 group-hover:translate-y-0 transition-transform duration-300 opacity-0 group-hover:opacity-100 mt-auto mb-8 shadow-xl">
                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
              </button>
            </div>
          </div>
          <div class="flex justify-between items-start">
            <div>
              <h3 class="font-medium text-lg text-[#1a1817] mb-1">Matte Black Tumbler</h3>
              <p class="text-xs tracking-widest text-[#6e685f] uppercase">Mug</p>
            </div>
            <p class="font-serif text-lg text-[#8B3E2F]">$35</p>
          </div>
        </div>

        <div class="group cursor-pointer">
          <div class="relative aspect-[4/5] rounded-xl overflow-hidden shadow-sm mb-4 bg-[#E8E2D6]">
            <img src="https://images.unsplash.com/photo-1581783342308-f792db809f6e?auto=format&fit=crop&q=80&w=600" alt="Minimalist Stoneware Jug" class="w-full h-full object-cover grayscale-[15%] transition-transform duration-700 group-hover:scale-105" />
            <div class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
              <button class="bg-white text-[#8B3E2F] p-4 rounded-full translate-y-4 group-hover:translate-y-0 transition-transform duration-300 opacity-0 group-hover:opacity-100 mt-auto mb-8 shadow-xl">
                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
              </button>
            </div>
          </div>
          <div class="flex justify-between items-start">
            <div>
              <h3 class="font-medium text-lg text-[#1a1817] mb-1">Minimalist Stoneware Jug</h3>
              <p class="text-xs tracking-widest text-[#6e685f] uppercase">Vase</p>
            </div>
            <p class="font-serif text-lg text-[#8B3E2F]">$120</p>
          </div>
        </div>

        <div class="group cursor-pointer">
          <div class="relative aspect-[4/5] rounded-xl overflow-hidden shadow-sm mb-4 bg-[#E8E2D6]">
            <img src="https://images.unsplash.com/photo-1517482813155-25b7b9ca4099?auto=format&fit=crop&q=80&w=600" alt="Textured Clay Teapot" class="w-full h-full object-cover grayscale-[15%] transition-transform duration-700 group-hover:scale-105" />
            <div class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
              <button class="bg-white text-[#8B3E2F] p-4 rounded-full translate-y-4 group-hover:translate-y-0 transition-transform duration-300 opacity-0 group-hover:opacity-100 mt-auto mb-8 shadow-xl">
                 <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
              </button>
            </div>
          </div>
          <div class="flex justify-between items-start">
            <div>
              <h3 class="font-medium text-lg text-[#1a1817] mb-1">Textured Clay Teapot</h3>
              <p class="text-xs tracking-widest text-[#6e685f] uppercase">Teapot</p>
            </div>
            <p class="font-serif text-lg text-[#8B3E2F]">$145</p>
          </div>
        </div>

      </div>
    </div>
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
        <a href="products.html" class="text-sm text-[#6e685f] hover:text-[#2c2826] transition-colors">Our Collection</a>
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