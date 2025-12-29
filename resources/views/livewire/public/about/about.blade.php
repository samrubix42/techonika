<div class="min-h-screen bg-black text-white relative isolate overflow-hidden">
    <!-- TOP ACCENT -->
    <div class="absolute left-1/2 -top-36 -z-10 -translate-x-1/2 blur-3xl pointer-events-none">
        <div class="w-[500px] h-[500px] bg-gradient-to-tr from-amber-400 to-yellow-400 opacity-12 rounded-full"></div>
    </div>

    <div class="max-w-6xl mx-auto px-4 py-16 sm:py-20">
        <!-- HERO -->
        <section class="grid gap-8 lg:grid-cols-2 items-center">
            <div>
                <h1 class="text-4xl sm:text-5xl font-extrabold">About Techonika</h1>
                <p class="mt-4 text-lg text-slate-400 max-w-xl">We are a team of engineers, designers and product builders focused on creating secure, scalable, and delightful digital products that help businesses grow.</p>

                <div class="mt-8 flex flex-wrap gap-3">
                    <a href="#contact" class="inline-block px-5 py-3 rounded-md bg-amber-400 text-black font-semibold">Get a Consultation</a>
                    <a href="#work" class="inline-block px-5 py-3 rounded-md border border-white/10">Our Work</a>
                </div>
            </div>

            <div class="rounded-2xl overflow-hidden border border-white/10 bg-white/5 p-6 backdrop-blur">
                <img src="https://source.unsplash.com/collection/190727/900x600" alt="Team" class="w-full h-64 object-cover rounded-lg mb-4">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <h4 class="text-xs text-amber-400 uppercase">Founded</h4>
                        <p class="mt-1 text-sm text-slate-300">2020</p>
                    </div>
                    <div>
                        <h4 class="text-xs text-amber-400 uppercase">Team</h4>
                        <p class="mt-1 text-sm text-slate-300">20+ experts</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- MISSION & VALUES -->
        <section class="mt-16 grid gap-8 lg:grid-cols-3">
            <div class="bg-white/5 border border-white/10 rounded-2xl p-6">
                <h3 class="text-lg font-semibold">Our Mission</h3>
                <p class="mt-2 text-sm text-slate-300">Build reliable software that empowers businesses and delights users with great product experiences.</p>
            </div>

            <div class="bg-white/5 border border-white/10 rounded-2xl p-6">
                <h3 class="text-lg font-semibold">Our Approach</h3>
                <p class="mt-2 text-sm text-slate-300">We combine product thinking, modern engineering practices and iterative design to deliver fast value and long-term scalability.</p>
            </div>

            <div class="bg-white/5 border border-white/10 rounded-2xl p-6">
                <h3 class="text-lg font-semibold">Our Values</h3>
                <ul class="mt-2 text-sm text-slate-300 space-y-2">
                    <li>Customer first.</li>
                    <li>Quality & security.</li>
                    <li>Transparent collaboration.</li>
                </ul>
            </div>
        </section>

        <!-- TEAM -->
        <section id="team" class="mt-16">
            <h2 class="text-2xl font-extrabold">Our Team</h2>
            <p class="mt-2 text-sm text-slate-400 max-w-xl">A passionate team of engineers, designers and product managers distributed globally.</p>

            <div class="mt-6 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-6">
                @for($i = 1; $i <= 8; $i++)
                <div class="bg-white/5 border border-white/10 rounded-2xl p-4 text-center">
                    <img src="https://source.unsplash.com/collection/888146/200x200?sig={{ $i }}" alt="Member {{ $i }}" class="mx-auto h-20 w-20 rounded-full object-cover mb-3">
                    <div class="text-sm font-semibold">Member {{ $i }}</div>
                    <div class="text-xs text-slate-400">Role</div>
                </div>
                @endfor
            </div>
        </section>

        <!-- CTA -->
        <section id="contact" class="mt-16 text-center">
            <h3 class="text-xl font-bold">Ready to work together?</h3>
            <p class="text-sm text-slate-400 mt-2">Tell us about your project and we’ll get back with a plan.</p>
            <div class="mt-6">
                <a href="#contact" class="inline-block px-8 py-3 rounded-xl font-semibold text-black bg-gradient-to-r from-amber-400 to-yellow-400">Request a Proposal</a>
            </div>
        </section>
    </div>
</div>
