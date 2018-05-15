<header class="fixed z-50 w-full bg-gray-900 sm:flex sm:justify-between sm:items-center sm:px-4 sm:py-3">
    <div class="flex items-center justify-between px-4 py-3 sm:p-0">
        <h2 class="text-xl text-gray-100">
            <a href="/" target="_self">Chessy Marie</a>
        </h2>
        <div class="sm:hidden">
            <button id="menu-toggle" type="button" class="block text-gray-500 hover:text-white focus:text-white focus:outline-none">
                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                    <path id="opened-menu" class="hidden" fill-rule="evenodd" d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"/>
                    <path id="closed-menu" fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"/>
                </svg>
            </button>
        </div>
    </div>
    <nav id="mobile-menu" class="px-2 pt-2 pb-4 sm:flex sm:p-0 hidden">
        <a href="#work-experience" target="_self" class="block px-2 py-1 text-white font-semibold rounded hover:bg-gray-800">Experience</a>
        <a href="#education" target="_self" class="mt-1 block px-2 py-1 text-white font-semibold rounded hover:bg-gray-800 sm:mt-0 sm:ml-2">Education</a>
        <a href="#skills" target="_self" class="mt-1 block px-2 py-1 text-white font-semibold rounded hover:bg-gray-800 sm:mt-0 sm:ml-2">Skills</a>
    </nav>
</header>

<script>
  document.getElementById("menu-toggle").onclick = function () {
    document.getElementById("opened-menu").classList.toggle("hidden");
    document.getElementById("closed-menu").classList.toggle("hidden");
    document.getElementById('mobile-menu').classList.toggle('block');
    document.getElementById('mobile-menu').classList.toggle('hidden');
  };
</script>
