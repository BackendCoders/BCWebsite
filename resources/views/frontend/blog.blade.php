@extends("component.main")
@section("content")
<!-- hero section  -->
<section class="relative h-[30vh] flex items-center justify-center text-center text-white overflow-hidden">

  <!-- BACKGROUND IMAGE -->
  <img 
    src="{{asset('assets/images/banner.png')}}"
    class="absolute inset-0 w-full h-full object-cover"
  />

  <!-- DARK OVERLAY -->
  <div class="absolute inset-0 bg-black/60"></div>

  <!-- CONTENT -->
  <div class="relative z-10 max-w-4xl px-6">

  

    <!-- HEADING -->
    <h1 class="mt-6 text-4xl sm:text-5xl md:text-6xl font-bold leading-tight">
    Blog &
      <span class="text-orange-600"> Insights</span>
    </h1>

    <!-- SUBTEXT -->
    <p class="mt-6 text-gray-300 text-sm sm:text-base md:text-lg max-w-2xl mx-auto">
      Project-driven stories on engineering, marketing, and design. Discover how Backend Coders align cloud, product, and go-to-market teams through practical playbooks, metrics, and hard-won lessons.
    </p>

 

  </div>

</section>
<!-- end hero section  -->



<section class="bg-white text-black relative overflow-hidden">
  <div class="absolute inset-0 bg-gradient-to-r from-[#FD5528]/10 via-transparent to-[#FD5528]/10 pointer-events-none"></div>
  <div class="max-w-7xl mx-auto px-4 py-16 relative">
    <div class="grid lg:grid-cols-2 gap-12">
      <div class="space-y-6">
        <p class="text-sm uppercase tracking-[0.4em] text-[#FD5528]">Insights Studio</p>
        <h1 class="text-3xl md:text-5xl font-bold leading-tight">
          Project-driven stories on engineering, marketing, and design.
        </h1>
        <p class="text-black text-base md:text-lg max-w-2xl">
          Discover how Backend Coders align cloud, product, and go-to-market teams through practical playbooks, metrics, and hard-won lessons.
        </p>
 
      </div>
      <div class="rounded-[32px] border border-black/10 bg-white p-6 backdrop-blur-md shadow-xl space-y-6">
        <div class="space-y-3">
          <p class="text-xs uppercase tracking-[0.4em] text-[#FD5528]">Search the lab</p>
          <input id="blogSearch" type="text" placeholder="Search posts, tags, and experiments"
            class="w-full px-5 py-3 rounded-3xl border border-black/20 bg-black/10 placeholder:text-black/60 focus:outline-none focus:border-[#FD5528] focus:bg-black/10 transition" />
          <p class="text-xs text-black">
            <span id="postCount">0 stories</span> displayed · <span id="activeCategory">All Categories</span>
          </p>
        </div>
        <div class="space-y-2">
          <p class="text-xs uppercase tracking-[0.4em] text-[#FD5528]">Filter by category</p>
          <div id="categoryFilters" class="flex flex-wrap gap-2"></div>
        </div>
   
      </div>
    </div>
  </div>
</section>

<section class="bg-slate-50 py-12">
  
  <div class="max-w-7xl mx-auto px-4 grid lg:grid-cols-3 gap-8">

    <div class="lg:col-span-2 space-y-8">
      <div class="grid sm:grid-cols-2 gap-6" id="blogGrid"></div>
      <div class="flex justify-between items-center px-4 py-3 rounded-2xl border border-dashed border-slate-300 bg-white shadow-sm">
        <div>
          <p class="text-xs uppercase tracking-[0.4em] text-slate-400">Ready for more</p>
          <p class="text-lg font-semibold text-slate-900">Build your next engagement</p>
        </div>
        <button class="text-sm font-bold text-[#FD5528] hover:text-[#fbb03b] transition">
          View all stories →
        </button>
      </div>
    </div>

    <div class="space-y-6">
      <div class="bg-white rounded-3xl p-6 shadow-lg border border-slate-100">
        <p class="text-xs uppercase tracking-[0.35em] text-slate-400 mb-3">Spotlight</p>
        <div id="featuredCard" class="space-y-2"></div>
      </div>

      <div class="bg-white rounded-3xl p-6 shadow-lg border border-slate-100">
        <p class="text-xs uppercase tracking-[0.35em] text-slate-400 mb-4">Recommended</p>
        <div id="recommendedList" class="space-y-4"></div>
      </div>

      <div class="bg-gradient-to-br from-[#FD5528]/10 via-white to-[#fbb03b]/10 rounded-3xl p-6 shadow-lg border border-[#FD5528]/20">
        <p class="text-sm uppercase tracking-[0.4em] text-[#FD5528] mb-3">Need support?</p>
        <p class="text-base text-slate-900">
          Talk to the insight team for custom briefings, dedicated retro sessions, or engineering deep dives.
        </p>
        <button class="mt-6 w-full  bg-gradient-to-r from-[#FD5528] to-[#fbb03b] hover:bg-gradient-to-r hover:from-[#FD5528] hover:to-[#fbb03b] text-white rounded-2xl py-3 font-semibold shadow-lg transition">
          Book a briefing
        </button>
      </div>
    </div>
  </div>
</section>

<script>
(() => {
  const posts = [
    {
      id: 1,
      title: "How AI is Changing Digital Marketing",
      category: "Marketing",
      summary: "AI-powered experimentation is slashing campaign setup time by 60%.",
      minutes: 2,
      date: "01 Apr 2026",
      image: "https://images.unsplash.com/photo-1498050108023-c5249f4df085",
      recommended: true
    },
    {
      id: 2,
      title: "Top SEO Strategies for 2026",
      category: "SEO",
      summary: "We rebuilt our SEO stack and doubled organic traffic in six months.",
      minutes: 3,
      date: "25 Mar 2026",
      image: "https://images.unsplash.com/photo-1518770660439-4636190af475",
      recommended: true
    },
    {
      id: 3,
      title: "Website Speed Optimization Tips",
      category: "Development",
      summary: "Practical fixes for Time to First Byte, caching, and continuous deployments.",
      minutes: 4,
      date: "18 Mar 2026",
      image: "https://images.unsplash.com/photo-1460925895917-afdab827c52f",
      recommended: false
    },
    {
      id: 4,
      title: "Social Media Growth Hacks",
      category: "Marketing",
      summary: "Creative-led stories that generated a 3x lift in shareable content.",
      minutes: 2,
      date: "12 Mar 2026",
      image: "https://images.unsplash.com/photo-1553877522-43269d4ea984",
      recommended: false
    },
    {
      id: 5,
      title: "Reactive Monitoring for Product Teams",
      category: "Development",
      summary: "Engineering teams use observability to stay ahead of release-day pressure.",
      minutes: 5,
      date: "03 Mar 2026",
      image: "https://images.unsplash.com/photo-1517430816045-df4b7de11d1d",
      recommended: true
    },
    {
      id: 6,
      title: "Design Systems That Scale Teams",
      category: "Design",
      summary: "Component libraries with modular docs keep cross-functional squads in sync.",
      minutes: 3,
      date: "27 Feb 2026",
      image: "https://images.unsplash.com/photo-1529333166437-7750a6dd5a70",
      recommended: false
    }
  ];

  const categoryList = ["All Categories", "SEO", "Marketing", "Development", "Business"];
  let activeCategory = "All Categories";
  const searchInput = document.querySelector("#blogSearch");
  const blogGrid = document.querySelector("#blogGrid");
  const postCount = document.querySelector("#postCount");
  const activeCategoryLabel = document.querySelector("#activeCategory");
  const categoryFilters = document.querySelector("#categoryFilters");
  const recommendedList = document.querySelector("#recommendedList");
  const featuredCard = document.querySelector("#featuredCard");

  if (!searchInput || !blogGrid || !categoryFilters || !postCount || !activeCategoryLabel || !recommendedList || !featuredCard) {
    return;
  }

  const projectedFeatured = posts[0];

  const renderFeatured = () => {
    featuredCard.innerHTML = `
      <div class="rounded-2xl overflow-hidden border border-slate-200">
        <img src="${projectedFeatured.image}" class="w-full h-40 object-cover" loading="lazy" />
      </div>
      <div class="space-y-2">
        <p class="text-xs uppercase tracking-[0.4em] text-slate-900">Featured</p>
        <h3 class="text-lg font-bold text-slate-900">${projectedFeatured.title}</h3>
        <p class="text-sm text-slate-500">${projectedFeatured.summary}</p>
        <p class="text-xs text-slate-400">${projectedFeatured.date} • ${projectedFeatured.minutes} min read</p>
      </div>
    `;
  };

  const renderCategories = () => {
    categoryFilters.innerHTML = categoryList
      .map(
        (category) => `
        <button type="button"
          class="category-pill rounded-full px-4 py-2 text-xs font-semibold tracking-[0.3em] uppercase transition border border-black/20 bg-black/10 hover:bg-black/20 ${
            category === activeCategory ? "bg-white text-slate-900" : "text-black"
          }"
          data-category="${category}"
        >
          ${category === "All Categories" ? "All" : category}
        </button>
      `
      )
      .join("");
  };

  const getFilteredPosts = () => {
    const query = searchInput.value.trim().toLowerCase();
    return posts.filter((post) => {
      const matchesCategory =
        activeCategory === "All Categories" || post.category === activeCategory || activeCategory === "Business" && !["Marketing", "SEO", "Development"].includes(post.category);
      const matchesSearch =
        post.title.toLowerCase().includes(query) || post.summary.toLowerCase().includes(query);
      return matchesCategory && matchesSearch;
    });
  };

  const renderPosts = () => {
    const filteredPosts = getFilteredPosts();
    postCount.textContent = `${filteredPosts.length} stories`;
    activeCategoryLabel.textContent = activeCategory;

    blogGrid.innerHTML = filteredPosts
      .map(
        (post) => `
        <article class="group bg-white rounded-3xl shadow-xl border border-slate-100 overflow-hidden transform transition hover:-translate-y-1 hover:shadow-2xl">
          <div class="relative">
            <img src="${post.image}" class="h-48 w-full object-cover transition duration-500 group-hover:scale-105" loading="lazy" />
            <span class="absolute top-3 left-3 bg-gradient-to-r from-[#FD5528] to-[#fbb03b] text-white text-xs font-semibold px-3 py-1 rounded-full shadow-lg">
              ${post.category}
            </span>
          </div>
          <div class="p-5 space-y-3">
            <p class="text-xs uppercase tracking-[0.35em] text-slate-400">${post.date}</p>
            <h3 class="text-lg font-semibold text-slate-900">${post.title}</h3>
            <p class="text-sm text-slate-500">${post.summary}</p>
            <div class="flex items-center justify-between text-xs text-slate-400">
              <span>${post.minutes} min read</span>
              <span class="text-[#FD5528] font-semibold">Read story →</span>
            </div>
          </div>
        </article>
      `
      )
      .join("");

    renderRecommended(filteredPosts);
  };

  const recommendedPosts = () => posts.filter((post) => post.recommended);

  const renderRecommended = (filteredPosts) => {
    const baseList = filteredPosts.filter((post) => post.recommended);
    const listToRender = baseList.length ? baseList : recommendedPosts();
    recommendedList.innerHTML = listToRender
      .map(
        (post) => `
        <div class="flex gap-3 rounded-xl border border-slate-200/60 p-3 transition hover:-translate-y-1 hover:shadow-lg bg-white">
          <img src="${post.image}" class="w-20 h-16 object-cover rounded-lg" loading="lazy" />
          <div>
            <p class="text-xs uppercase tracking-[0.3em] text-slate-400">${post.category}</p>
            <h4 class="text-sm font-semibold text-slate-900">${post.title}</h4>
            <p class="text-xs text-slate-500">${post.minutes} min read</p>
          </div>
        </div>
      `
      )
      .join("");
  };

  const handleCategoryClick = (event) => {
    if (!event.target.closest(".category-pill")) return;
    activeCategory = event.target.closest(".category-pill").dataset.category;
    renderCategories();
    renderPosts();
  };

  searchInput.addEventListener("input", renderPosts);
  categoryFilters.addEventListener("click", handleCategoryClick);

  renderCategories();
  renderFeatured();
  renderPosts();
})();
</script>

@endsection
