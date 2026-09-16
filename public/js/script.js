document.addEventListener("DOMContentLoaded", () => {

    /* ===================================================
    1. LOGIKA NAVBAR ACTIVE STATE & SCROLLSPY
    =================================================== */
    const navLinks = document.querySelectorAll(".nav-links a");
    const sections = document.querySelectorAll("section[id]");

    navLinks.forEach(link => {
        link.addEventListener("click", function() {
            navLinks.forEach(l => l.classList.remove("active"));
            this.classList.add("active");
        });
    });

    window.addEventListener("scroll", () => {
        let scrollPosition = window.scrollY + 100;

        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            const sectionId = section.getAttribute("id");

            if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                navLinks.forEach(link => {
                    link.classList.remove("active");
                    if (link.getAttribute("href") === `#${sectionId}`) {
                        link.classList.add("active");
                    }
                });
            }
        });
    });

    /* ===================================================
    2. LOGIKA POP-UP MODAL JURUSAN (index.html)
    =================================================== */
    const jurusanData = {
        tjkt: {
            title: "TJKT",
            desc: "Teknik Jaringan Komputer dan Telekomunikasi (TJKT) mempelajari infrastruktur jaringan, pengoperasian router dan switch, keamanan siber, server Linux/Windows, serta teknologi jaringan kabel fiber optic modern.",
            skills: ["MikroTik", "Cisco", "Linux Server", "Network Security", "Fiber Optic"],
            careers: ["Network Engineer", "System Administrator", "Cyber Security Analyst"],
            logo: "assets/jurusan/tjkt.png",
            siswaImg: "assets/images/siswa-tjkt.png"
        },
        pplg: {
            title: "PPLG",
            desc: "Pengembangan Perangkat Lunak dan Gim (PPLG) merupakan program keahlian yang mempelajari proses pengembangan perangkat lunak, mulai dari perancangan, pembuatan, hingga pengujian aplikasi. Siswa dibekali kemampuan untuk membuat website, aplikasi mobile, serta memahami pengelolaan basis data sesuai dengan kebutuhan dunia industri.",
            skills: ["HTML", "CSS", "Laravel", "JavaScript", "MySQL"],
            careers: ["Web Developer", "Software Engineer", "Database Admin"],
            logo: "assets/jurusan/pplg.png",
            siswaImg: "assets/images/siswa-pplg.png"
        },
        to: {
            title: "TO",
            desc: "Teknik Otomotif (TO) memfokuskan siswa pada perbaikan, pemeliharaan mesin kendaraan beroda dua maupun empat, sistem injeksi EFI, kelistrikan otomotif, serta manajemen bengkel industri modern.",
            skills: ["Engine Tune-Up", "Kelistrikan Mobil", "EFI System", "Brake & Suspension"],
            careers: ["Mekanik Otomotif", "Service Advisor", "Teknisi Industri"],
            logo: "assets/jurusan/to.png",
            siswaImg: "assets/images/siswa-to.png"
        },
        tpfl: {
            title: "TPFL",
            desc: "Teknik Pengelasan dan Fabrikasi Logam (TPFL) melatih keahlian dalam penyambungan logam, pengelasan industri SMAW/GMAW, manufaktur konstruksi baja, dan pembacaan cetak biru (blue print) skema teknik.",
            skills: ["Las SMAW", "Las GMAW/MIG", "Fabrikasi Logam", "CAD Drawing"],
            careers: ["Welder Profesional", "Quality Inspector", "Fabrikator Logam"],
            logo: "assets/jurusan/tpfl.png",
            siswaImg: "assets/images/siswa-tpfl.png"
        }
    };

    const modal = document.getElementById("jurusanModal");
    const closeModalBtn = document.getElementById("closeModal");
    const jurusanCards = document.querySelectorAll(".jurusan-card");

    if (modal && jurusanCards.length > 0) {
        const keys = ["tjkt", "pplg", "to", "tpfl"];

        jurusanCards.forEach((card, index) => {
            const btn = card.querySelector(".btn");

            if (btn) {
                btn.addEventListener("click", (e) => {
                    e.preventDefault();
                    const key = keys[index] || "pplg";
                    const data = jurusanData[key];

                    document.getElementById("modalTitle").innerText = data.title;
                    document.getElementById("modalDesc").innerText = data.desc;
                    document.getElementById("modalLogo").src = data.logo;
                    document.getElementById("modalSiswa").src = data.siswaImg;

                    const skillsBox = document.getElementById("modalSkills");
                    skillsBox.innerHTML = data.skills
                        .map(skill => `<span class="tag-pill">${skill}</span>`)
                        .join("");

                    const careersBox = document.getElementById("modalCareers");
                    careersBox.innerHTML = data.careers
                        .map(career => `<span class="tag-pill">${career}</span>`)
                        .join("");

                    modal.classList.add("show");
                });
            }
        });

        closeModalBtn.addEventListener("click", () => {
            modal.classList.remove("show");
        });

        window.addEventListener("click", (e) => {
            if (e.target === modal) {
                modal.classList.remove("show");
            }
        });

        document.addEventListener("keydown", (e) => {
            if (e.key === "Escape" && modal.classList.contains("show")) {
                modal.classList.remove("show");
            }
        });
    }

    /* ===================================================
    3. LOGIKA FILTER KATEGORI DI HALAMAN GALERI
    =================================================== */
    const filterBtns = document.querySelectorAll('.filter-tabs .tab-btn');
    const galeriItems = document.querySelectorAll('.galeri-grid .galeri-card');

    if (filterBtns.length > 0) {
        filterBtns.forEach(btn => {
            btn.addEventListener('click', function () {
                filterBtns.forEach(b => b.classList.remove('active'));
                this.classList.add('active');

                const selectedFilter = this.getAttribute('data-filter');

                galeriItems.forEach(item => {
                    const itemCategory = item.getAttribute('data-kategori');

                    if (selectedFilter === 'all' || itemCategory === selectedFilter) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    }

});