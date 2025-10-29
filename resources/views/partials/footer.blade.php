<?php
    $footerInfo = App\Models\FooterInfo::where('lang', app()->getLocale())->first();
?>
</penta-yazilim>
<footer class="footer-field w-full relative overflow-hidden bg-secondary-main">
    <div class="left-bg absolute left-0 top-0 z-2 flex mix-blend-color-burn md:w-1/2 h-full">
        <img src="../assets/image/static/footer-bg.png" alt="" class="w-auto h-full">
        <div class="bg-[linear-gradient(90deg,_rgba(46,71,92,0.025)_0%,_rgba(46,71,92,0.00)_82.3%)] min-w-[113px] h-full md:hidden"></div>
    </div>
    <div class="right-bg absolute min-md:right-[-90px] md:right-0 top-0 z-2 flex mix-blend-color-burn md:w-1/2 h-full">
        <div class="bg-[linear-gradient(180deg,_rgba(46,71,92,0.025)_0%,_rgba(46,71,92,0.00)_82.3%)] min-w-[113px] h-full md:hidden"></div>
        <img src="../assets/image/static/footer-bg.png" alt="" class="w-auto h-full scale-x-[-1] scale-y-[1]">
    </div>
    <div class="circle w-[861px] h-[455px] absolute top-0 right-[-213px] rounded-b-full opacity-40 bg-[radial-gradient(90%_80%_at_100%_-10%,_#00AE83_0%,_rgba(0,174,131,0.00)_100%)] pointer-events-none"></div>
    <div class="circle w-[861px] h-[455px] absolute bottom-0 left-[-213px] rounded-t-full opacity-40 bg-[radial-gradient(50%_100%_at_10%_100%,_#00AE83_0%,_rgba(0,174,131,0.00)_100%)] pointer-events-none"></div>
    <div class="footer-top w-full flex flex-col items-center gap-[50px] relative z-4 min-sm:mb-[50px]">
        <div class="logo-area w-full grid place-items-center">
            <div class="logo w-max relative py-[30px] lg:py-[15px] px-[80px] xl:px-[50px] grid place-items-center xs:before:hidden before:absolute before:left-0 before:top-[-1px] before:w-full before:h-full before:bg-[linear-gradient(180deg,_#527582_0%,_#527582_0.01%,_rgba(53,85,111,0.00)_99.62%)] before:opacity-30 before:-skew-x-12 before:pointer-events-none">
                <img src="../assets/image/trademark/logo-white.svg" alt="Logo" width="250" height="90" class="w-[250px] h-auto relative z-2">
            </div>
        </div>
        <div class="container max-w-[1640px] sm:hidden">
            <div class="flex justify-center">
                <?php $menus = [
                    [
                        'title' => 'Corporate',
                        'items' => [
                            [
                                'title' => 'Who are we?',
                                'link' => 'about-us.php',
                            ],
                            [
                                'title' => 'What Do We Do?',
                                'link' => 'about-us.php',
                            ],
                            [
                                'title' => 'How do we do?',
                                'link' => 'about-us.php',
                            ],
                            [
                                'title' => 'Our Vision',
                                'link' => 'about-us.php',
                            ],
                        ]
                    ],

                    [
                        'title' => 'Using Areas',
                        'items' => [
                            [
                                'title' => 'Sports fields',
                                'link' => 'using-area-detail.php',
                            ],
                            [
                                'title' => 'Parks and Gardens',
                                'link' => 'using-area-detail.php',
                            ],
                            [
                                'title' => 'Machinery Security Fence Systems',
                                'link' => 'using-area-detail.php',
                            ],
                            [
                                'title' => 'Secure Areas',
                                'link' => 'using-area-detail.php',
                            ],
                            [
                                'title' => 'Energy Facilities',
                                'link' => 'using-area-detail.php',
                            ],
                            [
                                'title' => 'Military Areas',
                                'link' => 'using-area-detail.php',
                            ],
                            [
                                'title' => 'Road Sides',
                                'link' => 'using-area-detail.php',
                            ],
                        ]
                    ],

                    [
                        'title' => 'Products',
                        'items' => [
                            [
                                'title' => 'Netrags',
                                'link' => 'products.php',
                            ],
                            [
                                'title' => 'Geobera',
                                'link' => 'products.php',
                            ],
                            [
                                'title' => 'Ifence',
                                'link' => 'products.php',
                            ],
                            [
                                'title' => 'Anymats',
                                'link' => 'products.php',
                            ],
                            [
                                'title' => 'Avind',
                                'link' => 'products.php',
                            ],
                            [
                                'title' => 'Integralspor',
                                'link' => 'products.php',
                            ],
                        ]
                    ],

                    [
                        'title' => 'Other Links',
                        'items' => [
                            [
                                'title' => 'Link Name 1',
                                'link' => 'https://pentayazilim.com',
                            ],
                            [
                                'title' => 'Link Name 2',
                                'link' => 'https://pentayazilim.com',
                            ],
                            [
                                'title' => 'Link Name 3',
                                'link' => 'https://pentayazilim.com',
                            ],
                            [
                                'title' => 'Link Name 4',
                                'link' => 'https://pentayazilim.com',
                            ],
                            [
                                'title' => 'Link Name 5',
                                'link' => 'https://pentayazilim.com',
                            ],
                            [
                                'title' => 'Link Name 6',
                                'link' => 'https://pentayazilim.com',
                            ],
                        ]
                    ],
                    [
                        'title' => 'GDPR',
                        'items' => [
                            [
                                'title' => 'Privacy Policy',
                                'link' => 'template.php',
                            ],
                            [
                                'title' => 'Cookie Policy',
                                'link' => 'template.php',
                            ],
                        ]
                    ],
                ]; foreach ($menus as $item): ?>
                    <div class="menu w-max md:w-full flex flex-col gap-[24px] px-[60px] xl:px-[40px] first:pl-0 last:pr-0 relative after:absolute after:top-0 after:right-0 after:w-[1px] after:h-[370px] after:bg-[linear-gradient(100deg,_rgba(255,255,255,0.00)_0%,_#FFF_52.33%,_rgba(255,255,255,0.00)_101.12%)] after:opacity-30 last:after:hidden">
                        <p class="text-[32px] xl:text-[26px] md:text-[20px] leading-[40px] xl:leading-[35px] text-white font-bold"><?= $item['title'] ?></p>
                        <ul class="flex flex-col gap-[5px]">
                            <?php foreach ($item['items'] as $link): ?>
                                <li class="block">
                                    <a href="<?= $link['link'] ?>" class="inline-flex items-center gap-[12px] group">
                                        <span class="text-[18px] leading-[48px] md:text-[16px] md:leading-[34px] text-white/60 transition-all duration-450 group-hover:text-white"><?= $link['title'] ?></span>
                                        <i class="icon-arrow-up-right text-[15px] md:text-[14px] leading-none h-[15px] md:h-[14px] text-primary-main lg:hidden transition-all duration-450 opacity-0 translate-x-[-10px] group-hover:opacity-100 group-hover:translate-x-0"></i>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <div class="footer-middle py-[50px] min-md:bg-primary-main relative z-4">
        <div class="container max-w-[1640px]">
            <div class="w-full flex lg:flex-wrap sm:flex-col sm:gap-[30px] [&_>_div]:min-lg:w-full">
                <div class="flex flex-col gap-[9px] pr-[85px] 2xl:pr-[40px] lg:w-1/3 sm:w-full sm:after:hidden sm:p-0 relative after:absolute after:top-0 after:right-0 after:w-[1px] after:h-[115px] after:bg-[linear-gradient(260deg,_rgba(255,255,255,0.00)_0%,_#FFF_52.33%,_rgba(255,255,255,0.00)_101.12%)] after:opacity-30">
                    <p class="text-[18px] md:text-[16px] leading-normal tracking-[-0.18px] text-white font-semibold">Address</p>
                    <a href="https://maps.google.com" target="_blank" class="text-[18px] md:text-[16px] leading-[24px] tracking-[-0.18px] text-white max-w-[342px] relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[1px] after:bg-white after:transition-all after:duration-450 hover:after:min-md:w-full after:md:hidden">{{$footerInfo->address}}</a>
                </div>
                <div class="flex flex-col gap-[17px] sm:gap-[9px] px-[85px] 2xl:px-[40px] lg:w-1/3 sm:w-full sm:after:hidden sm:p-0 relative after:absolute after:top-0 after:right-0 after:w-[1px] after:h-[115px] after:bg-[linear-gradient(260deg,_rgba(255,255,255,0.00)_0%,_#FFF_52.33%,_rgba(255,255,255,0.00)_101.12%)] after:opacity-30">
                    <p class="text-[16px] leading-normal tracking-[-0.16px] text-white font-semibold">Phone</p>
                    <a href="tel:+902126781313" class="text-[30px] xl:text-[20px] md:text-[16px] leading-normal tracking-[-1.2px] text-white w-max relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[1px] after:bg-white after:transition-all after:duration-450 hover:after:min-md:w-full after:md:hidden">{{$footerInfo->phone}}</a>
                </div>
                <div class="flex flex-col gap-[17px] sm:gap-[9px] pl-[85px] 2xl:pl-[40px] pr-[70px] 2xl:pr-[35px] lg:w-1/3 sm:w-full lg:after:hidden sm:p-0 relative after:absolute after:top-0 after:right-0 after:w-[1px] after:h-[115px] after:bg-[linear-gradient(260deg,_rgba(255,255,255,0.00)_0%,_#FFF_52.33%,_rgba(255,255,255,0.00)_101.12%)] after:opacity-30">
                    <p class="text-[16px] leading-normal tracking-[-0.16px] text-white font-semibold">E-Mail</p>
                    <a href="mailto:{{$footerInfo->email}}" class="text-[30px] xl:text-[20px] md:text-[16px] leading-normal tracking-[-0.3px] text-white w-max relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[1px] after:bg-white after:transition-all after:duration-450 hover:after:min-md:w-full after:md:hidden">{{$footerInfo->email}}</a>
                </div>
                <div class="flex flex-col gap-[15px] sm:gap-[9px] pl-[70px] 2xl:pl-[35px] lg:w-full lg:pl-0 lg:pt-[20px] sm:pt-0">
                    <p class="text-[16px] leading-normal tracking-[-0.16px] text-white font-semibold">Social Media</p>
                    <ul class="flex items-center flex-wrap gap-[20px]">
                            <li>
                                <a href="<?= $footerInfo['facebook_url'] ?>" target="_blank" class="block group transition-all duration-450 hover:scale-110">
                                    <i class="icon-facebook text-[26px] leading-none h-[26px] text-white/40 md:text-white transition-all duration-450 group-hover:text-white"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?= $footerInfo['x_url'] ?>" target="_blank" class="block group transition-all duration-450 hover:scale-110">
                                    <i class="icon-x  text-[26px] leading-none h-[26px] text-white/40 md:text-white transition-all duration-450 group-hover:text-white"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?= $footerInfo['linkedin_url'] ?>" target="_blank" class="block group transition-all duration-450 hover:scale-110">
                                    <i class="icon-linkedin  text-[26px] leading-none h-[26px] text-white/40 md:text-white transition-all duration-450 group-hover:text-white"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?= $footerInfo['instagram_url'] ?>" target="_blank" class="block group transition-all duration-450 hover:scale-110">
                                    <i class="icon-instagram  text-[26px] leading-none h-[26px] text-white/40 md:text-white transition-all duration-450 group-hover:text-white"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?= $footerInfo['youtube_url'] ?>" target="_blank" class="block group transition-all duration-450 hover:scale-110">
                                    <i class="icon-youtube  text-[26px] leading-none h-[26px] text-white/40 md:text-white transition-all duration-450 group-hover:text-white"></i>
                                </a>
                            </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom min-md:bg-secondary-main relative z-4 py-[20px]">
        <div class="container max-w-[1640px]">
            <div class="grid grid-cols-3 sm:grid-cols-1 gap-[20px] items-center">
                <p class="text-[16px] leading-normal tracking-[0.16px] text-white/60 sm:text-center">
                    Ifence is a Brand of <a href="#" target="_blank" class="text-primary-main relative after:absolute after:bottom-0 after:left-0 after:bg-primary-main after:w-0 after:h-[1px] after:transition-all after:duration-300 hover:after:w-full">Integral Group</a>
                </p>
                <p class="text-[16px] leading-normal tracking-[0.16px] text-white/60 text-center sm:hidden">
                    © <?= date('Y') ?>  <a href="index.php" target="_blank" class="text-primary-main relative after:absolute after:bottom-0 after:left-0 after:bg-primary-main after:w-0 after:h-[1px] after:transition-all after:duration-300 hover:after:w-full">Ifence.com</a> | All rights reserved
                </p>
                <div class="flex min-sm:justify-end sm:justify-center sm:hidden"><img src="../assets/image/trademark/integral-group.png" alt="Integral Group" width="107" height="22" class="w-[107px] h-auto text-right"></div>
            </div>
        </div>
    </div>
</footer>

        <!-- POPUP -->
        <!-- POPUP | GDPR -->
        <section id="popup-gdpr" class="hidden !rounded-[20px] !m-0 !p-[30px] !max-w-[1024px] w-full shadow-xl">
            <div class="inner w-full [&_~_button_path]:stroke-black">
                <div class="text-editor !max-w-full">
                    <!-- Stylelar tasarımı yansıtmak adına eklenmiştir. / Backendde silinerek panel editörü üzerinden eklenmeli. -->
                    <h4><strong>KİŞİSEL VERİLERİN KORUNMASI</strong></h4>
                    <h5><strong>İNTERNET SİTESİ ÇEREZ POLİTİKASI</strong></h5>

                    <p>Kişisel verileriniz; veri sorumlusu olarak Firma Adı (“ŞİRKET” veya Firma Adı” olarak adlandırılacaktır.) tarafından işletilen (www.alanadi.com) internet sitesini ziyaret edenlerin gizliliğini korumak Kurumumuzun önde gelen ilkelerindendir. Bu Çerez Kullanımı Politikası (“Politika”), tüm web sitesi ziyaretçilerimize ve kullanıcılarımıza hangi tür çerezlerin hangi koşullarda kullanıldığını açıklamaktadır.</p>
                    <p>Çerezler, bilgisayarınız ya da mobil cihazınız üzerinden ziyaret ettiğiniz internet siteleri tarafından cihazınıza veya ağ sunucusuna depolanan küçük metin dosyalarıdır.</p>
                    <p>Genellikle ziyaret ettiğiniz internet sitesini kullanmanız sırasında size kişiselleştirilmiş bir deneyim sunmak, sunulan hizmetleri geliştirmek ve deneyiminizi iyileştirmek için kullanılır ve bir internet sitesinde gezinirken kullanım kolaylığına katkıda bulunabilir. Çerez kullanılmasını tercih etmezseniz tarayıcınızın ayarlarından Çerezleri silebilir ya da engelleyebilirsiniz. Ancak bunun internet sitemizi kullanımınızı etkileyebileceğini hatırlatmak isteriz. Tarayıcınızdan Çerez ayarlarınızı değiştirmediğiniz sürece bu sitede çerez kullanımını kabul ettiğinizi varsayacağız.</p>

                    <h6><strong>1. ÇEREZLERDE HANGİ TÜR VERİLER İŞLENİR?</strong></h6>
                    <p>İnternet sitelerinde yer alan çerezlerde, türüne bağlı olarak, siteyi ziyaret ettiğiniz cihazdaki tarama ve kullanım tercihlerinize ilişkin veriler toplanmaktadır. Bu veriler, eriştiğiniz sayfalar, incelediğiniz hizmet ve ürünler, tercih ettiğiniz dil seçeneği ve diğer tercihlerinize dair bilgileri kapsamaktadır.</p>

                    <h6><strong>2. ÇEREZ NEDİR ve KULLANIM AMAÇLARI NELERDİR?</strong></h6>
                    <p>Çerezler, ziyaret ettiğiniz internet siteleri tarafından tarayıcılar aracılığıyla cihazınıza veya ağ sunucusuna depolanan küçük metin dosyalarıdır. Sitede tercih ettiğiniz dil ve diğer ayarları içeren bu küçük metin dosyaları, siteye bir sonraki ziyaretinizde tercihlerinizin hatırlanmasına ve sitedeki deneyiminizi iyileştirmek için hizmetlerimizde geliştirmeler yapmamıza yardımcı olur. Böylece bir sonraki ziyaretinizde daha iyi ve kişiselleştirilmiş bir kullanım deneyimi yaşayabilirsiniz.</p>
                    <p>İnternet Sitemizde çerez kullanılmasının başlıca amaçları aşağıda sıralanmaktadır:</p>
                    <ul>
                        <li>İnternet sitesinin işlevselliğini ve performansını arttırmak yoluyla sizlere sunulan hizmetleri geliştirmek,</li>
                        <li>İnternet Sitesini iyileştirmek ve İnternet Sitesi üzerinden yeni özellikler sunmak ve sunulan özellikleri sizlerin tercihlerine göre kişiselleştirmek;</li>
                        <li>İnternet Sitesinin, sizin ve Kurum’un hukuki ve ticari güvenliğinin teminini sağlamak, Site üzerinden sahte işlemlerin gerçekleştirilmesini önlemek;</li>
                        <li>5651 sayılı Internet Ortamında Yapılan Yayınların Düzenlenmesi ve Bu Yayınlar Yoluyla İşlenen Suçlarla Mücadele Edilmesi Hakkında Kanun ve Internet Ortamında Yapılan Yayınların Düzenlenmesine Dair Usul ve Esaslar Hakkında Yönetmelik’ten kaynaklananlar başta olmak üzere, kanuni ve sözleşmesel yükümlülüklerini yerine getirmek.</li>
                    </ul>

                    <h5><strong>3.İNTERNET SİTEMİZDE KULLANILAN ÇEREZ TÜRLERİ</strong></h5>

                    <h6><strong>3.1. Oturum Çerezleri</strong></h6>
                    <p>Oturum çerezlerini ziyaretinizi süresince internet sitesinin düzgün bir şekilde çalışmasının teminini sağlamaktadır. Sitelerimizin ve sizin, ziyaretinizde güvenliğini, sürekliliğini sağlamak gibi amaçlarla kullanılırlar. Oturum çerezleri geçici çerezlerdir, siz tarayıcınızı kapatıp sitemize tekrar geldiğinizde silinir, kalıcı değillerdir.</p>

                    <h6><strong>3.2. Kalıcı Çerezler</strong></h6>
                    <p>Bu tür çerezler tercihlerinizi hatırlamak için kullanılır ve tarayıcılar vasıtasıyla cihazınızda depolanır Kalıcı çerezler, sitemizi ziyaret ettiğiniz tarayıcınızı kapattıktan veya bilgisayarınızı yeniden başlattıktan sonra bile saklı kalır. Tarayıcınızın ayarlarından silinene kadar bu çerezler tarayıcınızın alt klasörlerinde tutulurlar.</p>
                    <p>Kalıcı çerezlerin bazı türleri; İnternet Sitesini kullanım amacınız gibi hususlar göz önünde bulundurarak sizlere özel öneriler sunulması için kullanılabilmektedir.</p>
                    <p>Kalıcı çerezler sayesinde İnternet Sitemizi aynı cihazla tekrardan ziyaret etmeniz durumunda, cihazınızda İnternet Sitemiz tarafından oluşturulmuş bir çerez olup olmadığı kontrol edilir ve var ise, sizin siteyi daha önce ziyaret ettiğiniz anlaşılır ve size iletilecek içerik bu doğrultuda belirlenir ve böylelikle sizlere daha iyi bir hizmet sunulur.</p>

                    <h6><strong>3.3. Zorunlu/Teknik Çerezler</strong></h6>
                    <p>Ziyaret ettiğiniz internet sitesinin düzgün şekilde çalışabilmesi için zorunlu çerezlerdir. Bu tür çerezlerin amacı, sitenin çalışmasını sağlamak yoluyla gerekli hizmet sunmaktır. Örneğin, internet sitesinin güvenli bölümlerine erişmeye, özelliklerini kullanabilmeye, üzerinde gezinti yapabilmeye olanak verir.</p>

                    <h6><strong>3.4. Analitik Çerezler</strong></h6>
                    <p>İnternet sitesinin kullanım şekli, ziyaret sıklığı ve sayısı, hakkında bilgi toplayan ve ziyaretçilerin siteye nasıl geçtiğini gösterirler. Bu tür çerezlerin kullanım amacı, sitenin işleyiş biçimini iyileştirerek performans arttırmak ve genel eğilim yönünü belirlemektir. Ziyaretçi kimliklerinin tespitini sağlayabilecek verileri içermezler. Örneğin, gösterilen hata mesajı sayısı veya en çok ziyaret edilen sayfaları gösterirler.</p>

                    <h6><strong>3.5. İşlevsel/Fonksiyonel Çerezler</strong></h6>
                    <p>Ziyaretçinin site içerisinde yaptığı seçimleri kaydederek bir sonraki ziyarette hatırlar. Bu tür çerezlerin amacı ziyaretçilere kullanım kolaylığı sağlamaktır. Örneğin, site kullanıcısının ziyaret ettiği her bir sayfada kullanıcı şifresini tekrar girmesini önler.</p>

                    <h6><strong>3.6. Hedefleme/Reklam Çerezleri</strong></h6>
                    <p>Ziyaretçilere sunulan reklamların etkinliğinin ölçülmesi ve reklamların kaç kere görüntülendiğinin hesaplanmasını sağlarlar. Bu tür çerezlerin amacı, ziyaretçilerin ilgi alanlarına özelleştirilmiş reklamların sunulmasıdır.</p>
                    <p>Aynı şekilde, ziyaretçilerin gezinmelerine özel olarak ilgi alanlarının tespit edilmesini ve uygun içeriklerin sunulmasını sağlarlar. Örneğin, ziyaretçiye gösterilen reklamın kısa süre içinde tekrar gösterilmesini engeller.</p>

                    <h5><strong>4. ÇEREZ TERCİHLERİ NASIL YÖNETİLİR?</strong></h5>
                    <p>Çerezlerin kullanımına ilişkin tercihlerinizi değiştirmek ya da çerezleri engellemek veya silmek için tarayıcınızın ayarlarını değiştirmeniz yeterlidir.</p>
                    <p>Birçok tarayıcı çerezleri kontrol edebilmeniz için size çerezleri kabul etme veya reddetme, yalnızca belirli türdeki çerezleri kabul etme ya da bir internet sitesinin cihazınıza çerez depolamayı talep ettiğinde tarayıcı tarafından uyarılma seçeneği sunar.</p>
                    <p>Aynı zamanda, daha önce tarayıcınıza kaydedilmiş çerezlerin silinmesi de mümkündür.</p>
                    <p>Çerezleri devre dışı bırakır veya reddederseniz, bazı tercihleri manuel olarak ayarlamanız gerekebilir, hesabınızı tanıyamayacağımız ve ilişkilendiremeyeceğimiz için internet sitesindeki bazı özellikler ve hizmetler düzgün çalışmayabilir. Tarayıcınızın ayarlarını aşağıdaki tablodan ilgili link’e tıklayarak değiştirebilirsiniz.</p>

                    <h5><strong>5. İNTERNET SİTESİ GİZLİLİK POLİTİKASI’NIN YÜRÜRLÜĞÜ</strong></h5>
                    <p>İnternet Sitesi Gizlilik Politikası ..../..../.... .tarihlidir. Politika’nın tümünün veya belirli maddelerinin yenilenmesi durumunda Politika’nın yürürlük tarihi güncellenecektir. Gizlilik Politikası Kurum’un internet sitesinde (www.alanadi.com) yayımlanır ve kişisel veri sahiplerinin talebi üzerine ilgili kişilerin erişimine sunulur.</p>
                    <p><strong>Firma Adı</strong><br><strong>Adres:</strong> Mahalle Adı Sokak Adı. No: 1/A, 34444 İlçe Adı/İl Adı<br><strong>Telefon:</strong> +90 216 555 55 55<br><strong>E – Posta:</strong> mail@alanadi.com<br><strong>Web Adresi:</strong> www.alanadi.com</p>
                </div>
            </div>
        </section>

        <section id="popup-projects" class="hidden !m-0 !p-[30px] !max-w-[993px] !bg-transparent w-full h-full shadow-lg">
            <div class="h-full grid place-items-center">
                <div class="h-full !max-h-[1080px]">
                    <div class="inner w-full bg-white py-[60px] h-full relative">
                        <div class="close-button w-[50px] aspect-square grid place-items-center is-close-btn cursor-pointer absolute top-[10px] right-[10px]" data-fancybox-close>
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                <path d="M17 1L1 17" stroke="#111111"/>
                                <path d="M1 1L17 17" stroke="#111111"/>
                            </svg>
                        </div>
                        <div class="flex flex-col h-full gap-[55px] 2xl:gap-[40px] xl:gap-[30px] md:gap-[25px] px-[60px] xl:px-[35px] md:px-[30px]">
                            <div class="flex min-md:items-center md:flex-col md:gap-[20px] justify-between">
                                <p class="text-[48px] 2xl:text-[40px] xl:text-[30px] md:text-[20px] leading-[64px] xl:leading-[35px] font-normal text-primary-main [&_span]:font-bold [&_span]:text-primary-main" id="country-title">Russia <span>Projects</span></p>
                                <?php
                                    $link = "projects.php";
                                    $title = "All Projects";
                                    $background = "bg-secondary-50 backdrop-blur-[15px]";
                                    $backgroundHover = "before:bg-primary-main";
                                    $textColor = "text-secondary-main";
                                    $textColorHover = "group-hover/button:min-md:text-white";
                                ?>
                                <a href="<?= $link ?>" class="main-button group/button inline-flex items-center sm:justify-between gap-[32px] lg:gap-[24px] xs:gap-[20px] w-fit sm:w-full max-h-[60px] py-[6px] pl-[50px] lg:pl-[25px] xs:pl-[15px] pr-[11px] relative transition-all duration-450 before:absolute before:-skew-x-12 before:rounded-[6px] before:z-3 before:right-0 before:top-0 before:w-0 before:h-full <?= $backgroundHover ?> before:transition-all before:duration-450 hover:before:min-md:w-full hover:before:min-md:right-auto hover:before:min-md:left-0">
                                    <div class="absolute w-full h-full left-0 top-0 -skew-x-12 rounded-[6px] z-2 <?= $background ?>"></div>
                                    <span class="text-[18px] md:text-[16px] leading-[24px] relative z-5 transition-all duration-450 whitespace-nowrap <?= $textColorHover ?>  <?= $textColor ?>"><?= $title ?></span>
                                    <div class="py-[14px] px-[28px] xs:px-[20px] grid place-items-center relative z-5 before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-primary-main before:-skew-x-12 before:rounded-[6px] ---- after:absolute after:right-0 after:top-0 after:w-0 after:h-full after:bg-secondary-main after:transition-all after:duration-450 group-hover/button:after:delay-200 after:-skew-x-12 after:rounded-[6px] group-hover/button:after:min-md:w-full group-hover/button:after:min-md:right-auto group-hover/button:after:min-md:left-0">
                                        <i class="icon-arrow-right text-[20px] xs:text-[18px] leading-none h-[20px] xs:h-[18px] text-white relative z-5 transition-all duration-450 delay-300"></i>
                                    </div>
                                </a>
                            </div>
                            <div class="projects grid grid-cols-1 gap-y-[80px] px-[60px] ml-[-60px] mr-[20px] gap-[28px] max-h-full h-full overflow-auto scrollbar scrollbar-w-[7px] scrollbar-track-rounded-[0px] scrollbar-thumb-rounded-[0px] scrollbar-thumb-primary-main scrollbar-track-primary-main/0">
                                <?php for ($i = 1; $i <= 6; $i++): ?>
                                    <div class="item relative group/item h-[600px] sm:h-[460px] <?= $i == 0 ? 'reveal' : '' ?>">
                                        <div class="image-wrapper w-full h-[500px] sm:h-[320px] relative">
                                            <a href="project-detail.php" class="block w-full h-full">
                                                <img src="../assets/image/general/project-image.jpg" alt="Project" width="800" height="500" class="w-full h-full object-cover  rounded-[20px]">
                                            </a>
                                        </div>
                                        <div class="content px-[40px] xsm:px-[10px] translate-y-[-100px]">
                                            <div class="bg-white overflow-hidden rounded-[20px] px-[50px] xl:px-[30px] py-[30px] xl:py-[24px] shadow-[0px_4px_30px_0px_rgba(0,0,0,0.10)] border border-solid border-transparent transition-all duration-450 group-hover/item:border-primary-main">
                                                <div class="flex flex-col gap-[12px] ">
                                                    <div class="flex min-sm:items-center sm:flex-col gap-[30px] sm:gap-[10px]">
                                                        <div class="location h-full relative py-[4px] pr-[30px] border-0 min-sm:!border-r min-sm:border-solid border-r-secondary-main/16">
                                                            <div class="flex items-center gap-[8px] transition-all ease-[cubic-bezier(.45,.05,.55,.95)] duration-300 group-hover/item:min-sm:translate-x-[-100px] group-hover/item:min-sm:opacity-0 delay-500 group-hover/item:min-sm:delay-0">
                                                                <i class="icon-location-pin text-[16px] leading-none h-[16px] text-primary-main"></i>
                                                                <p class="text-[20px] xl:text-[18px] leading-[30px] text-primary-main font-bold">Russia</p>
                                                            </div>
                                                            <a href="project-detail.php" class="block absolute opacity-0 z-3 left-0 top-0 md:hidden min-md:-translate-x-[150px] transition-all ease-manidar duration-500 delay-300 group-hover/item:min-md:translate-x-0 group-hover/item:min-md:opacity-100">
                                                                <div class="py-[14px] px-[28px] xs:px-[20px] grid place-items-center transition-all duration-300 z-5 relative before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-primary-main before:-skew-x-12 before:rounded-[6px] --- after:-skew-x-12 after:rounded-[6px] after:absolute after:right-0 after:top-0 after:bg-secondary-main after:w-0 after:h-full after:transition-all after:duration-300 after:z-2 hover:after:w-full hover:after:right-auto hover:after:left-0">
                                                                    <i class="icon-arrow-right text-[20px] xs:text-[18px] leading-none h-[20px] xs:h-[18px] text-white relative z-5 transition-all duration-450 delay-300"></i>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <h3 class="text-[32px] xl:text-[28px] md:text-[20px] leading-[48px] xl:leading-[40px] md:leading-[30px] font-bold text-secondary-main line-clamp-2 transition-all duration-300">
                                                            <a href="project-detail.php">The standard Lorem Ipsum passage, used since the 1500s</a>
                                                        </h3>
                                                    </div>
                                                    <p class="text-[20px] lg:text-[18px] leading-[30px] text-secondary-main opacity-85 line-clamp-2">Our Ifence brand generally produces and assembles fence systems, door systems and wrought iron systems.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="popup-get-offer" class="hidden !m-0 !p-[30px] !max-w-[1380px] !bg-secondary-main !rounded-[20px] w-full shadow-lg">
            <div class="h-full grid place-items-center [&_~_button]:!hidden">
                <div class="close-button w-[50px] aspect-square grid place-items-center is-close-btn cursor-pointer absolute z-3 top-[10px] right-[10px]" data-fancybox-close>
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path d="M17 1L1 17" stroke="#ffffff"/>
                        <path d="M1 1L17 17" stroke="#ffffff"/>
                    </svg>
                </div>
                <div class="flex flex-wrap items-center">
                    <div class="gallery-area w-1/2 pr-[45px] xl:pr-[30px] md:pr-0 md:w-full md:order-2 md:!hidden grid">
                        <div class="flex flex-col w-full items-center gap-[37px] lg:gap-[25px]">
                            <div class="grid">
                                <div class="contact-gallery-slider-2 overflow-hidden w-full">
                                    <div class="swiper-wrapper">
                                        <?php for ($s = 0; $s <= 3; $s++): ?>
                                            <div class="swiper-slide">
                                                <div class="item w-full h-[550px] xl:h-[450px] lg:h-[400px] sm:h-[320px] rounded-[20px] overflow-hidden isolate">
                                                    <img src="../assets/image/general/contact.jpg" alt="Offer" width="740" height="550" class="w-full h-full object-cover">
                                                </div>
                                            </div>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="contact-gallery-slider-pagination-2 flex items-center justify-center gap-[7px] [&_.swiper-pagination-bullet]:w-[11px] [&_.swiper-pagination-bullet]:h-[12px] [&_.swiper-pagination-bullet]:-skew-x-12 [&_.swiper-pagination-bullet]:bg-white/16 [&_.swiper-pagination-bullet.swiper-pagination-bullet-active]:bg-primary-main [&_.swiper-pagination-bullet]:rounded-[2px] [&_.swiper-pagination-bullet]:!m-0 [&_.swiper-pagination-bullet]:!opacity-100 [&_.swiper-pagination-bullet]:transition-all [&_.swiper-pagination-bullet]:duration-300"></div>
                        </div>
                    </div>
                    <div class="form w-1/2 pl-[45px] xl:pl-[30px] md:pl-0 md:mb-[30px] md:w-full md:order-1">
                        <form action="#" method="post" id="career-form" enctype="multipart/form-data">
                            <div class="grid grid-cols-2 gap-y-[15px] gap-x-[30px] sm:gap-y-[30px] xs:gap-y-[12px]">
                                <div class="form-group sm:col-span-2">
                                    <div class="w-full relative flex flex-col group/item">
                                        <input type="text" name="name" id="name" required minlength="2" class="order-2 w-full border-[0] !border-b border-solid border-b-white/16 group-hover/item:border-b-white placeholder-white/35 peer text-[20px] text-primary-main pb-[16px] transition-all duration-300 [&_~_div]:focus:w-full [&_~_div]:focus:right-auto [&_~_div]:focus:left-0 [&_~_label]:focus:text-primary-main">
                                        <label for="name" class="order-1 mb-[5px] block text-[18px] text-white/70 peer-focus:text-primary-main transition-all duration-300 pointer-events-none translate-y-[40px] peer-focus:!translate-y-0">Name</label>
                                        <div class="order-3 after absolute z-2 right-0 bottom-0 w-0 h-[1px] bg-primary-main transition-all duration-500"></div>
                                    </div>
                                </div>

                                <div class="form-group  sm:col-span-2">
                                    <div class="w-full relative flex flex-col group/item">
                                        <input type="text" name="surname" id="surname" required minlength="2" class="order-2 w-full border-[0] !border-b border-solid border-b-white/16 group-hover/item:border-b-white placeholder-white/35 peer text-[20px] text-primary-main pb-[16px] transition-all duration-300 [&_~_div]:focus:w-full [&_~_div]:focus:right-auto [&_~_div]:focus:left-0 [&_~_label]:focus:text-primary-main">
                                        <label for="surname" class="order-1 mb-[5px] block text-[18px] text-white/70 peer-focus:text-primary-main transition-all duration-300 pointer-events-none translate-y-[40px] peer-focus:!translate-y-0">Surname</label>
                                        <div class="order-3 after absolute z-2 right-0 bottom-0 w-0 h-[1px] bg-primary-main transition-all duration-500"></div>
                                    </div>
                                </div>

                                <div class="form-group  sm:col-span-2">
                                    <div class="w-full relative flex flex-col group/item">
                                        <input type="email" name="email" id="email" required minlength="5" class="order-2 w-full border-[0] !border-b border-solid border-b-white/16 group-hover/item:border-b-white placeholder-white/35 peer text-[19px] text-primary-main pb-[16px] transition-all duration-300 [&_~_div]:focus:w-full [&_~_div]:focus:right-auto [&_~_div]:focus:left-0 [&_~_label]:focus:text-primary-main">
                                        <label for="email" class="order-1 mb-[5px] block text-[18px] text-white/70 peer-focus:text-primary-main transition-all duration-300 pointer-events-none translate-y-[40px] peer-focus:!translate-y-0">E-Mail</label>
                                        <div class="order-3 after absolute z-2 right-0 bottom-0 w-0 h-[1px] bg-primary-main transition-all duration-500"></div>
                                    </div>
                                </div>

                                <div class="form-group sm:col-span-2">
                                    <div class="w-full relative flex flex-col group/item">
                                        <input type="text" name="phone" id="phone" required minlength="5" class="order-2 w-full border-[0] !border-b border-solid border-b-white/16 group-hover/item:border-b-white placeholder-white/35 peer text-[20px] text-primary-main pb-[16px] transition-all duration-300 [&_~_div]:focus:w-full [&_~_div]:focus:right-auto [&_~_div]:focus:left-0 [&_~_label]:focus:text-primary-main">
                                        <label for="phone" class="order-1 mb-[5px] block text-[18px] text-white/70 peer-focus:text-primary-main transition-all duration-300 pointer-events-none translate-y-[40px] peer-focus:!translate-y-0">Phone</label>
                                        <div class="order-3 after absolute z-2 right-0 bottom-0 w-0 h-[1px] bg-primary-main transition-all duration-500"></div>
                                    </div>
                                </div>

                                <div class="form-group  col-span-2">
                                    <div class="w-full relative flex flex-col group/item">
                                        <textarea name="message" id="message" required minlength="5" class="order-2 w-full resize-none border-[0] !border-b border-solid border-b-white/16 group-hover/item:border-b-white placeholder-white/35 peer text-[20px] text-primary-main pb-[71px] transition-all duration-300 [&_~_div]:focus:w-full [&_~_div]:focus:right-auto [&_~_div]:focus:left-0 [&_~_label]:focus:text-primary-main"></textarea>
                                        <label for="message" class="order-1 mb-[5px] block text-[18px] text-white/70 peer-focus:text-primary-main transition-all duration-300 pointer-events-none translate-y-[40px] peer-focus:!translate-y-0">Message</label>
                                        <div class="order-3 after absolute z-2 right-0 bottom-0 w-0 h-[1px] bg-primary-main transition-all duration-500"></div>
                                    </div>
                                </div>

                                <div class="form-el group/form relative flex items-center gap-[20px] md:col-span-2 xs:py-[12px] mt-[50px] xl:mt-[25px] ml-[15px]"> <!-- error için bu div'e class="error" eklenecek -->
                                    <input type="checkbox" id="app-form-checkbox" class="peer cursor-pointer absolute left-0 top-0 w-full h-full opacity-0 z-10">
                                    <div class="box relative shrink-0 w-[21px] rounded-[3px] aspect-square duration-300 before:absolute before:duration-450 peer-checked:before:!opacity-100 peer-checked:before:!scale-100 before:scale-0 before:rounded-[2px] before:opacity-0 before:left-[50%] before:top-[50%] before:translate-x-[-50%] before:translate-y-[-50%] before:w-[40%] before:h-[40%] before:bg-white border border-solid border-white/25 peer-hover:bg-primary-400/10 peer-hover:border-primary-400/50 peer-checked:!border-white group-[&.error]/form:border-red-500"></div>
                                    <label for="app-form-checkbox" class=" leading-normal duration-300 text-[15px] text-white font-light tracking-[-0.15px]">
                                        I have read and accept the <a href="#popup-gdpr" class="inline-block relative z-20 text-white font-bold duration-300 decoration decoration-white underline" data-fancybox="">Clarification Text.</a>
                                    </label>
                                </div>

                                <div class="form-group flex justify-end md:col-span-2 md:justify-start mt-[50px] xl:mt-[25px] md:my-0 mr-[51px] xl:mr-0">
                                    <button type="submit" class="main-button group/button inline-flex items-center sm:justify-between gap-[32px] lg:gap-[24px] xs:gap-[20px] w-fit sm:w-full max-h-[60px] py-[6px] pl-[50px] lg:pl-[25px] xs:pl-[15px] pr-[11px] relative transition-all duration-450 before:absolute before:-skew-x-12 before:rounded-[6px] before:z-3 before:right-0 before:top-0 before:w-0 before:h-full before:bg-primary-main before:transition-all before:duration-450 hover:before:min-md:w-full hover:before:min-md:right-auto hover:before:min-md:left-0">
                                        <div class="absolute w-full h-full left-0 top-0 -skew-x-12 rounded-[6px] z-2 bg-white/10 backdrop-blur-[15px]"></div>
                                        <span class="text-[18px] md:text-[16px] leading-[24px] relative z-5 transition-all duration-450 whitespace-nowrap group-hover/button:min-md:text-white text-white">Send</span>
                                        <div class="py-[14px] px-[28px] xs:px-[20px] grid place-items-center relative z-5 before:absolute before:left-0 before:top-0 before:w-full before:h-full before:bg-primary-main before:-skew-x-12 before:rounded-[6px] ---- after:absolute after:right-0 after:top-0 after:w-0 after:h-full after:bg-secondary-main after:transition-all after:duration-450 group-hover/button:after:delay-200 after:-skew-x-12 after:rounded-[6px] group-hover/button:after:min-md:w-full group-hover/button:after:min-md:right-auto group-hover/button:after:min-md:left-0">
                                            <i class="icon-arrow-right text-[20px] xs:text-[18px] leading-none h-[20px] xs:h-[18px] text-white relative z-5 transition-all duration-450 delay-300"></i>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- BG OVERLAY -->
        <div class="bg-overlay-general fixed left-0 top-0 z-[90] opacity-0 invisible duration-500 [&.active]:opacity-100 [&.active]:visible [&.black]:bg-black/30 w-full h-full group"></div>
        <!-- COOKIE -->
        <div class="cookie-box fixed bottom-[20px] right-[20px] left-[20px] ml-0 mr-auto w-fit max max-w-full z-[200] duration-500 xs:w-full xs:left-0 xs:bottom-0 xs:right-0 [&.accepted]:opacity-0 [&.accepted]:invisible [&.accepted]:translate-y-[260%] opacity-0">
            <div class="cookie-content flex p-[20px] rounded-3xl bg-black space-x-5 sm:flex-col xs:rounded-none sm:space-y-3">
                <div class="text-field flex space-x-5">
                    <span class="cookie-icon flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" viewBox="0 0 36.86 36.86">
                            <path d="M36.12,15.62c-.06-.24-.24-.42-.48-.48-.23-.05-.47,.04-.6,.24-.78,1.15-2.08,1.84-3.47,1.85-1.51,.02-2.9-.78-3.65-2.09-.14-.19-.36-.3-.6-.3h-.53c-2.96,.01-5.37-2.38-5.38-5.33,0-.01,0-.03,0-.04,0-.51,.07-1.01,.21-1.5,.09-.29,.2-.56,.33-.83,.06-.15,.06-.32,0-.48-.05-.17-.19-.3-.36-.36-1.19-.42-1.98-1.55-1.97-2.81,0-.09,0-.18,.01-.27,0-.07,.03-.14,.05-.2v-.12c.1-.49,.31-.96,.6-1.37,.15-.16,.2-.39,.12-.6-.07-.21-.26-.35-.48-.36-.5-.05-1-.07-1.5-.06C8.53,.5,.5,8.53,.5,18.43c0,9.9,8.03,17.93,17.93,17.93,9.9,0,17.93-8.03,17.93-17.93-.02-.94-.1-1.88-.24-2.81Zm-15.69-7.81c-.41,.29-.9,.45-1.4,.46-1.33,0-2.4-1.08-2.39-2.41,0-1.09,.74-2.04,1.79-2.32,.02,1.53,.86,2.93,2.21,3.65-.08,.2-.15,.41-.21,.62Zm-2,27.36c-9.24,.16-16.86-7.2-17.02-16.44C1.25,9.48,8.61,1.86,17.85,1.7c.19,0,.39,0,.58,0h.42c-.11,.2-.19,.41-.26,.62-1.97,.24-3.36,2.03-3.12,4,.22,1.8,1.75,3.15,3.56,3.15,.41,0,.82-.07,1.2-.21v.21c0,3.62,2.92,6.56,6.54,6.57,.01,0,.02,0,.03,0h.3c1.01,1.49,2.68,2.39,4.48,2.39,1.3,0,2.55-.46,3.53-1.32,.05,.44,.07,.88,.06,1.32-.03,9.23-7.51,16.71-16.74,16.73h0Z" style="fill: #fff; stroke: #fff;"></path>
                            <path d="M10.66,10.06c-1.98,0-3.59,1.61-3.59,3.59s1.61,3.59,3.59,3.59,3.59-1.61,3.59-3.59h0c0-1.98-1.61-3.58-3.59-3.59Zm0,5.98c-1.32,0-2.39-1.07-2.39-2.39s1.07-2.39,2.39-2.39,2.39,1.07,2.39,2.39c0,1.32-1.07,2.39-2.39,2.39h0Z" style="fill: #fff; isolation: isolate; opacity: .4; stroke: #fff;"></path>
                            <path d="M11.26,23.21c-1.65,0-2.99,1.34-2.99,2.99,0,1.65,1.34,2.99,2.99,2.99s2.99-1.34,2.99-2.99h0c.02-1.64-1.3-2.97-2.93-2.99-.02,0-.04,0-.06,0Zm0,4.78c-.99,0-1.79-.8-1.79-1.79s.8-1.79,1.79-1.79,1.79,.8,1.79,1.79h0c.02,.97-.76,1.78-1.73,1.79-.02,0-.04,0-.06,0Z" style="fill: #fff; isolation: isolate; opacity: .4; stroke: #fff;"></path>
                            <path d="M23.21,21.42c-2.64,0-4.78,2.14-4.78,4.78,0,2.64,2.14,4.78,4.78,4.78s4.78-2.14,4.78-4.78c0-2.64-2.15-4.77-4.78-4.78Zm0,8.37c-1.98,0-3.59-1.61-3.59-3.59s1.61-3.59,3.59-3.59,3.59,1.61,3.59,3.59h0c0,1.98-1.61,3.58-3.59,3.59Z" style="fill: #fff; isolation: isolate; opacity: .4; stroke: #fff;"></path>
                        </svg>
                    </span>
                    <p class="cookie-text text-white text-[14px] leading-tight flex items-center max-w-[300px] sm:mr-0 sm:max-w-full">Bu site, hizmetlerini sunmak ve trafiği analiz etmek için Çerezlerden yararlanıyor.</p>
                </div>
                <div class="button-field flex sm:justify-center space-x-5">
                    <a href="#popup-gdpr" data-fancybox="" class="info leading-tight text-[12px] text-white whitespace-nowrap opacity-60 hover:opacity-100 flex items-center duration-500">
                        <span class="text">Devamını Oku</span>
                    </a>
                    <a href="javascript:;" class="accept-cookie flex items-center duration-500 space-x-3">
                        <span class="text text-[14px] leading-tight text-white opacity-100 font-bold whitespace-nowrap">Tamam</span>
                        <i class="icon flex items-center duration-500">👍</i>
                    </a>
                </div>
            </div>
        </div>

        <!-- Önbellek tutmasın diye ekledim '?id<?= rand(); ?>' yazısını silersin -->
        <script src="../assets/js/script.js?id<?= rand(); ?>"></script>

    </body>

</html>