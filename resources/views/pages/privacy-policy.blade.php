@extends('layouts.app')

@section('title', 'الأسئلة الشائعة')

@section('content')
    <main></main>
    <div class="position-relative z-3 start-0 w-100 css-box-over-header">
        <div class="container">
            <div class="bg-white rounded-3 p-5 border">
                <!-- create accordion for privacy policy page-->
                <h2 class="h2 text-dark fw-bold mb-3">السياسات </h2>
                <div class="accordion" id="accordionFlushExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">سياسة الخصوصية وسرية المعلومات</button>
                        </h2>
                        <div class="accordion-collapse collapse" id="flush-collapseOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="fs-5 text-dark-emphasis">تضع بوابة شركة أبعاد التطويرية لخدمات الأعمال سرية معلومات مستخدميها وزوارها على رأس قائمة الأولويات، وتبذل إدارة الموقع أو المنصة كل جهودها لتقديم خدمات ذات جودة عالية لكل الشركاء من خلال وثيقة الخصوصية وسرية المعلومات.</p>
                                <h5 class="h5 text-dark fw-semibold mb-3">توفير آليات للتواصل والمشاركة:</h5>
                                <p class="fs-5 text-dark-emphasis">تلتزم إدارة الموقع أو المنصة بالتفاعل والاستجابة لطلبات الاستفسارات الواردة إليها من خلال صفحة اتصل بنا.</p>
                                <h5 class="h5 text-dark fw-semibold mb-3">دليل الخدمات:</h5>
                                <p class="fs-5 text-dark-emphasis">الخدمة	مدة إنجاز الخدمة المتوقع	وقت توفر الخدمة (ساعة/يوم)</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">سياسة الاستخدام وإخلاء المسؤولية</button>
                        </h2>
                        <div class="accordion-collapse collapse" id="flush-collapseTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="fs-5 text-dark-emphasis">تهتم شركة أبعاد التطويرية لخدمات الأعمال "أبعاد" بحماية بيانات المستفيدين من خدماتها وأنظمتها، والحفاظ على خصوصيتهم وذلك بتطبيق الضوابط الإدارية والتدابير التقنية اللازمة؛ وفقاً لما ذكر في الأنظمة واللوائح والقرارات والسياسات ذات العلاقة.</p>
                                <p class="fs-5 text-dark-emphasis"> تم صياغة إشعار الخصوصية لمساعدة المستفيدين على فهم طبيعة ونوع البيانات التي يتم جمعها من خلال قنوات الشركة المختلفة، والغرض من جمعها ومعالجتها، وكيفية حمايتها.</p>
                                <p class="fs-5 text-dark-emphasis">ومن المهم أن يكون المستفيد على علم بكيفية استخدام شركة أبعاد التطويرية لخدمات الأعمال لبياناته الشخصية وحقوقه؛ وفقاً للسياسات والأنظمة المعمول بها في المملكة العربية السعودية.</p>
                                <p class="fs-5 text-dark-emphasis">إنَّ استخدامك لخدمات شركة أبعاد التطويرية لخدمات الأعمال، يعني اطلاعك وموافقتك على ما ورد في إشعار الخصوصية وما يتم عليه من تعديلات مستمرة.</p>
                                <p class="fs-5 text-dark-emphasis">ونحث المستفيد من خدمات الشركة على الاطلاع بشكل مستمر على إشعار الخصوصية لمعرفة أي تحديثات تتم عليه.</p>
                                <h5 class="h5 text-dark fw-semibold mb-3">بيانات التواصل:</h5>
                                <p class="fs-5 text-dark-emphasis">شركة أبعاد التطويرية لخدمات الأعمال</p>
                                <p class="fs-5 text-dark-emphasis">لقسم/ الفريق المختص: إدارة الإعلام</p>
                                <p class="fs-5 text-dark-emphasis">البريد الإلكتروني:<a class="text-dark-emphasis" href="mailto:info@abaad.com.sa">info@abaad.com.sa</a></p>
                                <p class="fs-5 text-dark-emphasis">الهاتف:<a class="text-dark-emphasis" href="tel:0504883053"> 0504883053</a></p>
                                <h5 class="h5 text-dark fw-semibold mb-3">1.2 ما هي البيانات الشخصية التي يتم جمعها:</h5>
                                <p class="fs-5 text-dark-emphasis">نقوم بجمع بياناتك الشخصية اللازمة بحسب الخدمة التي ترغب في استخدامها أو الحصول عليها، وتشمل التالي:</p>
                                <p class="fs-5 text-dark-emphasis">بيانات الحساب: تشمل بيانات الدخول كأسماء المستخدمين وكلمات المرور  وبيانات التواصل كأرقام الهواتف والبريد الالكتروني والعنوان الشخصي.</p>
                                <p class="fs-5 text-dark-emphasis">البيانات التقنية: بما في ذلك عنوان بروتوكول الإنترنت الخاص بك وهو عنوان ال (IP) الذي يستخدم لربط حاسبك الشخصي بالإنترنت.</p>
                                <p class="fs-5 text-dark-emphasis">البيانات المالية: تشمل البيانات التي يتم جمعها لأغراض إجراء عمليات الدفع كرقم الحساب ورقم البطاقة الائتمانية.</p>
                                <p class="fs-5 text-dark-emphasis">البيانات الصحية: تشمل كل بيان شخصي يتعلق بحالة الفرد الصحية، سواء الجسدية، أو العقلية، أو النفسية، أو المتعلقة بالخدمات الصحية الخاصة به.</p>
                                <p class="fs-5 text-dark-emphasis">بيانات تعريف الحالة: قد تشمل بيانات عن الحالة الاجتماعية الخاصة بك كمستفيد من خدمات شركة أبعاد التطويرية لخدمات الأعمال.</p>
                                <h5 class="h5 text-dark fw-semibold mb-3">1.3 كيف يتم جمع البيانات الشخصية:</h5>
                                <p class="fs-5 text-dark-emphasis">تقوم الشركة بجمع ومعالجة بعض البيانات الشخصية، التي يتم الحصول عليها بشكل مباشر أو غير مباشر، باستخدام طرق مختلفة تشمل:</p>
                                <h5 class="h5 text-dark fw-semibold mb-3">الطرق المباشرة:</h5>
                                <p class="fs-5 text-dark-emphasis">الخدمات: عند التسجيل في القنوات الرسمية لشركة أبعاد التطويرية لخدمات الأعمال، وتشمل تطبيقات الهاتف المحمول أو المنتجات أو الخدمات المختلفة.</p>
                                <p class="fs-5 text-dark-emphasis">التواصل: عند التواصل مع الشركة عبر قنوات خدمة العملاء.</p>
                                <p class="fs-5 text-dark-emphasis">استطلاعات الرأي.</p>
                                <h5 class="h5 text-dark fw-semibold mb-3">الطرق غير المباشرة:</h5>
                                <p class="fs-5 text-dark-emphasis">البيانات التي يتم تزويدنا بها عن طريق جهات أخرى.</p>
                                <p class="fs-5 text-dark-emphasis">ملفات تعريف الارتباط (Cookies).</p>
                                <h5 class="h5 text-dark fw-semibold mb-3">1.4 الأساس النظامي لجمع بياناتك الشخصية والغرض من جمعها:</h5>
                                <p class="fs-5 text-dark-emphasis">يعتبر جمع ومعالجة بيانتك الشخصية ضرورياً لأداء خدمات تحقق المصلحة العامة، حيث يتم جمعها للأغراض التالية:</p>
                                <p class="fs-5 text-dark-emphasis">تمكين وتقديم خدمات شركة أبعاد التطويرية لخدمات الأعمال واستيفاء متطلباتها.</p>
                                <p class="fs-5 text-dark-emphasis">إصدار السياسات وإعداد الدراسات التي تخدم متطلبات العمل.</p>
                                <p class="fs-5 text-dark-emphasis">حل ومعالجة استفسارات وشكاوى المستفيدين من خدمات الشركة.</p>
                                <p class="fs-5 text-dark-emphasis">رفع مستوى أداء الخدمات وتطويرها وتحسين تجربة المستفيد، وضمان استمرارية تقديم الخدمات بالجودة المطلوبة.  </p>
                                <p class="fs-5 text-dark-emphasis">مصادقة هوية المستخدم عند التسجيل في خدمات الشركة المختلفة.</p>
                                <p class="fs-5 text-dark-emphasis">تلبية بعض المتطلبات القانونية والتنظيمية.</p>
                                <h5 class="h5 text-dark fw-semibold mb-3">1.5 مشاركة البيانات الشخصية:</h5>
                                <p class="fs-5 text-dark-emphasis">وفقاً لسياسة مشاركة البيانات الصادرة من مكتب إدارة البيانات الوطنية، لن نشارك بياناتك الشخصية مع الجهات غير الحكومية إلا إذا كانت من الجهات المصرح لها القيام بأداء خدمات حكومية محددة، أو بعد الحصول على موافقتك للقيام بذلك.</p>
                                <p class="fs-5 text-dark-emphasis">قد نشارك بياناتك الشخصية الضرورية مع جهات حكومية لأغراض محددة مبنية على أساس نظامي أو احتياج عملي مبرر يهدف إلى تحقيق مصلحة عامة دون إلحاق أي ضرر بالمصالح الوطنية، أو أنشطة الجهات، أو خصوصية الأفراد، أو سلامة البيئة، ويستثنى من ذلك البيانات والجهات المستثناة بأوامر سامية.</p>
                                <p class="fs-5 text-dark-emphasis">عند مشاركة بياناتك الشخصية، يتم الحرص على مشاركتها من خلال بيئة آمنة وموثوقة؛ وفقاً للأنظمة واللوائح والسياسات ذات العلاقة، قد نتخذ خطوات إضافية لضمان حماية بياناتك من خلال توقيع اتفاقية لمشاركة البيانات بين الشركة والجهات الأخرى؛ وفقاً لشروط وأحكام محددة متوافقة مع مبادئ مشاركة البيانات.</p>
                                <h5 class="h5 text-dark fw-semibold mb-3">1.6 نقل البيانات الشخصية خارج الحدود الجغرافية للمملكة:</h5>
                                <p class="fs-5 text-dark-emphasis">وفقًا للأنظمة المطبقة، سيتم تخزين بياناتك الشخصية ومعالجتها بطريقة آمنة داخل الحدود الجغرافية للمملكة العربية السعودية، وذلك لضمان المحافظة على السيادة الوطنية الرقمية لهذه البيانات ما لم تكن من حالات نقل أو معالجة البيانات خارج الحدود الجغرافية للمملكة والموضحة في المادة (التاسعة والعشرون) من نظام حماية البيانات الشخصية.</p>
                                <h5 class="h5 text-dark fw-semibold mb-3">1.7 حماية البيانات الشخصية:</h5>
                                <p class="fs-5 text-dark-emphasis">تعد حماية بياناتك الشخصية والتأكد من التعامل معها بشكل صحيح من الأولويات الأساسية لنا، حيث يتم التأكد من أن البيانات الشخصية متاحة فقط للأشخاص المخولين بالوصول لها والتعامل معها، من خلال تنفيذ عدد من الإجراءات الفنية والتنظيمية، بما في ذلك - على سبيل المثال لا الحصر - ما يلي:</p>
                                <p class="fs-5 text-dark-emphasis">ضبط الوصول إلى الأنظمة والشبكات</p>
                                <p class="fs-5 text-dark-emphasis">توعية وتدريب الموظفين على حماية البيانات.</p>
                                <p class="fs-5 text-dark-emphasis">تطبيق التدابير الأمنية الملائمة لحماية البيانات – كالتشفير.</p>
                                <p class="fs-5 text-dark-emphasis">حذف البيانات الشخصية والتخلص منها عند انتهاء الغرض من جمعها؛ وفقاً للأنظمة واللوائح المعمول بها، ووفقاً لما ورد في (المادة الثامنة عشرة) من نظام حماية البيانات الشخصية.</p>
                                <p class="fs-5 text-dark-emphasis">توفير بيئة مادية آمنة للنسخ الورقية من سجلات البيانات الشخصية.</p>
                                <h5 class="h5 text-dark fw-semibold mb-3">1.8 حقوقك فيما يتعلق بمعالجة البيانات الشخصية:</h5>
                                <p class="fs-5 text-dark-emphasis">الحق في العلم، ويشمل ذلك إحاطتك علماً بالمسوغ النظامي أو العملي المعتبر لجمع بياناتك الشخصية، والغرض منها، وبأنه لن تتم معالجتها لاحقاً بطريقة تتعارض مع الغرض الذي تم جمعها من أجله، أو في غير الحالات المنصوص عليها في (المادة العاشرة) من نظام حماية البيانات الشخصية.</p>
                                <p class="fs-5 text-dark-emphasis">الحق في وصولك إلى بياناتك الشخصية المتوافرة لدى الشركة، ويشمل ذلك الاطلاع عليها، والحصول على نسخة منها بصيغة واضحة ومطابقة لمضمون السجلات وبلا مقابل مادي - وفقاً لما تحدده اللوائح - وذلك دون إخلال بما يقضي به نظام المعلومات الائتمانية فيما يخص المقابل المالي، ودون إخلال بما تقضي به (المادة التاسعة) من نظام حماية البيانات الشخصية. </p>
                                <p class="fs-5 text-dark-emphasis">الحق في طلب تصحيح بياناتك الشخصية المتوافرة لدى الشركة، أو إكمالها، أو تحديثها.</p>
                                <p class="fs-5 text-dark-emphasis">الحق في طلب إتلاف بياناتك الشخصية المتوافرة لدى الشركة عند انتهاء الحاجة إليها، وبما يتوافق مع ما ورد في (المادة الثامنة عشرة) من نظام حماية البيانات الشخصية.</p>
                                <p class="fs-5 text-dark-emphasis">ونود التنويه، بأنه بعض أو كل من تلك الحقوق قد تخضع لاستثناءات وإعفاءات أبعادة يحددها النظام، وسيتم تقييمها على أساس كل حالة على حدة للتأكد من مناسبتها.</p>
                                <h5 class="h5 text-dark fw-semibold mb-3">1.9 هل لديك استفسار أو شكوى بخصوص إشعار الخصوصية؟</h5>
                                <p class="fs-5 text-dark-emphasis">في حال وجود أي استفسار أو شكوى أو طلب فيما يخص حقوقك المتعلقة بمعالجة بياناتك الشخصية أو حول ما ورد في إشعار الخصوصية بشكل عام، يمكنك التواصل مع إدارة الإعلام في شركة أبعاد التطويرية لخدمات الأعمال عبر نموذج التواصل</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse8" aria-expanded="false" aria-controls="flush-collapse8"> سياسة الحصول على المعلومات</button>
                        </h2>
                        <div class="accordion-collapse collapse" id="flush-collapse8" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="fs-5 text-dark-emphasis">تلتزم شركة أبعاد التطويرية لخدمات الأعمال بحماية خصوصية المستفيدين من خدماتها وأنظمتها، والحفاظ على سرية معلوماتهم على رأس قائمة الأولويات، وتبذل إدارة الموقع أو المنصة كل جهودها لتقديم خدمات ذات جودة عالية لكل الشركاء من خلال سياسة الحصول على المعلومات.</p>
                                <h5 class="h5 text-dark fw-semibold mb-3">حقوق الأفراد في حرية المعلومات</h5>
                                <p class="fs-5 text-dark-emphasis fw-semibold">لمبدأ الأول: الشفافية</p>
                                <p class="fs-5 text-dark-emphasis">للفرد الحق في معرفة المعلومات المتعلقة بأنشطة الجهات العامة؛ تعزيزاً لمنظومة النزاهة والشفافية والمساءلة.</p>
                                <p class="fs-5 text-dark-emphasis fw-semibold">المبدأ الثاني: الضرورة والتناسب</p>
                                <p class="fs-5 text-dark-emphasis">أي قيود على طلب الاطلاع أو الحصول على المعلومات المحمية التي تتلقاها أو تنتجها أو تتعامل معها الجهات العامة يجب أن تكون مبررة بطريقة واضحة وصريحة.</p>
                                <p class="fs-5 text-dark-emphasis">المبدأ الثالث: الأصل في المعلومات العامة الإفصاح</p>
                                <p class="fs-5 text-dark-emphasis">لكل فرد الحق في الاطلاع على المعلومات العامة –غير المحمية– وليس بالضرورة أن يتمتع مقدم الطلب بحيثية معينة أو باهتمام معين بهذه المعلومات ليتمكن من الحصول عليها، كما لا يتعرض لأي مساءلة قانونية متعلقة بهذا الحق.</p>
                                <p class="fs-5 text-dark-emphasis fw-semibold">المبدأ الرابع: المساواة</p>
                                <p class="fs-5 text-dark-emphasis">يتم التعامل مع جميع طلبات الاطلاع أو الحصول على المعلومات العامة على أساس المساواة وعدم التمييز بين الأفراد.</p>
                                <p class="fs-5 text-dark-emphasis">حقوق الأفراد فيما يتعلق بالاطلاع على المعلومات العامة أو الحصول عليها</p>
                                <p class="fs-5 text-dark-emphasis">حق الاطلاع والحصول على أي معلومة غير محمية لدى أي جهة عامة.</p>
                                <p class="fs-5 text-dark-emphasis">الحق في معرفة سبب رفض الاطلاع أو الحصول على المعلومات المطلوبة.</p>
                                <p class="fs-5 text-dark-emphasis">الحق في التظلم على قرار رفض طلب الاطلاع والحصول على المعلومات المطلوبة.</p>
                                <p class="fs-5 text-dark-emphasis">حقوق المستفيدينفي الوصول إلى المعلومات الحكومية</p>
                                <p class="fs-5 text-dark-emphasis">البيانات الحكومية المفتوحة تعد من أهم مصادر البيانات التي يمكن لأي شخص استخدامها بحرية دون قيود فنية أو مالية أو قانونية، كما يمكن إعادة استخدامها وتوزيعها مع مراعاة متطلبات ترخيص البيانات المفتوحة التي تُنشر بموجبها وذلك من خلال الموقع أو المنصة الوطنية للبيانات المفتوحة.</p>
                                <p class="fs-5 text-dark-emphasis">وتعمل الشركة على تسهيل الحصول على البيانات المفتوحة لجميع الزوار، كما تسعى الشركة إلى مشاركة هذه البيانات مع المستفيدين عبر  المنصة أو الموقع الالكتروني؛ و ذلك بهدف تعزيز الشفافية وتشجيع المشاركة الإلكترونية.</p>
                                <p class="fs-5 text-dark-emphasis fw-semibold">التشريعات المرتبطة:</p>
                                <p class="fs-5 text-dark-emphasis">طبقا إلى سياسات حوكمة البيانات الوطنية المعلنة من قبل الشركة السعودية للبيانات والذكاء الاصطناعي (سدايا).</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse9" aria-expanded="false" aria-controls="flush-collapse9"> سياسة استخدام البيانات المفتوحة</button>
                        </h2>
                        <div class="accordion-collapse collapse" id="flush-collapse9" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="fs-5 text-dark-emphasis">ينبغي على زوار الموقع أو المنصة والمستفيدين من الموقع أو المنصة الإلكترونية الخاصة بشركة أبعاد التطويرية لخدمات الأعمال وخدماتها الاطلاع على سياسة استخدام تلك البيانات لمعرفة أي تحديثات يتم عليها.</p>
                                <p class="fs-5 text-dark-emphasis">
                                    إن قراءة السياسة أو استخدام البيانات المفتوحة في الموقع أو المنصة الإلكترونية يعتبر إقراراً من المستخدم بالالتزام بأحكام وشروط سياسة إعادة استخدام البيانات المفتوحة.
                                    تتيح الشركة لمستخدمي الموقع أو المنصة الاطلاع على البيانات المفتوحة، كما أن لهم الحق في استخدام هذه البيانات على مسؤوليتهم الشخصية، وهذا الحق مكفول لجميع المستفيدين كما أنها تقدمه مجاناً.
                                    يكون مستخدم البيانات المفتوحة مسؤولاً عن إعادة استخدام البيانات في الموقع أو المنصة الإلكترونية للشركة، ولا يجب أن ينتج عن إعادة استخدام هذه البيانات أي أخطاء تتعلق بمحتوى البيانات ومصدرها وتاريخها.
                                </p>
                                <p class="fs-5 text-dark-emphasis fw-semibold">مسؤولية الشركة:</p>
                                <p class="fs-5 text-dark-emphasis">
                                    إن شركة أبعاد التطويرية لخدمات الأعمال لا تضمن استمرارية توافر هذه البيانات أو جزء منها، كما أنها:
                                    غير مسؤولة عن أي أخطاء أو بيانات مفقودة في البيانات المفتوحة.
                                    غير مسؤولة عن منتجات فكرية أو دراسات أو تقارير مبنية على هذه البيانات.
                                    غير مسؤولة عن أي ضرر أو سوء استخدام تتعرض له أي جهة أو فرد أو أي كيان وذلك نتيجة استخدام البيانات المنشورة.
                                    ا تتحمل الشركة أي مسؤولية تجاه مستخدمي هذه البيانات، وما قد يقع عليهم من ضرر أو خسارة بسبب إعادة استخدامها.
                                </p>
                                <p class="fs-5 text-dark-emphasis fw-semibold">شروط إعادة استخدام البيانات المفتوحة:</p>
                                <p class="fs-5 text-dark-emphasis">
                                    ينبغي على المستخدم عدم تحريف البيانات المفتوحة والمنشورة على الموقع أو المنصة الإلكترونية الخاصة بشركة أبعاد التطويرية لخدمات الأعمال.
                                    ينبغي عدم استخدام البيانات المفتوحة والمنشورة على الموقع أو المنصة الإلكترونية الخاصة بالشركة في أغراض سياسية أو لدعم نشاط غير مشروع أو إجرامي أو في تعليقات عنصرية أو تميزية أو التأجيج أو التأثير السلبي في الثقافة أو المساواة أو التحريض أو أي نشاط غير نظامي أو مخالف لعادات المملكة وتقاليدها.
                                    ينبغي الإشارة إلى مصدر المعلومات التي تم إعادة استخدامها عن طريق وضع رابط الموقع أو المنصة الإلكترونية الخاصة بشركة أبعاد التطويرية لخدمات الأعمال للمحافظة على الملكية الفكرية للبيانات ومصداقيتها وصحة مصدرها.
                                    ان إعادة استخدام البيانات المفتوحة في الموقع أو المنصة الإلكترونية للشركة هي من مسؤولية المستخدم، مع ضرورة عدم حدوث أي أخطاء عند إعادة استخدام هذه البيانات تتعلق بمحتوى البيانات ومصدرها وتاريخها.
                                    لا يحق استخدام البيانات بطريقة توحي بأن المستخدم هو جهة رسمية، أو بأنه قد تم الترخيص بنشر تلك البيانات بشكل خاص.
                                    ان قراءة السياسة أو استخدام البيانات المفتوحة في الموقع أو المنصة الإلكترونية يعتبر إقراراً من المستخدم بالالتزام بأحكام وشروط سياسة إعادة استخدام البيانات المفتوحة.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse10" aria-expanded="false" aria-controls="flush-collapse10"> سياسة المشاركة المجتمعية</button>
                        </h2>
                        <div class="accordion-collapse collapse" id="flush-collapse10" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="fs-5 text-dark-emphasis">اكتسبت المشاركة الإلكترونية أهمية كبيرة في الفترة الماضية، حيث تتيح آلياتها المختلفة للمستفيدين المساهمة في اختيار الآلية المناسبة لهم، وتضمن إيصال آرائهم ومقترحاتهم.</p>
                                <p class="fs-5 text-dark-emphasis">تحتوي المشاركة المجتمعية على العديد من قنوات التواصل والتفاعل الإلكترونية، التي تنقل آراء ووجهات نظر زوار الموقع أو المنصة الإلكترونية من مختلف الفئات لتصل إلكترونياً للإدارة أو الخدمات في الشركة، إذ يتم التفاعل مع هذه المشاركة بالرد في أسرع وقت ممكن مع الحرص التام على الحفاظ على مبدأ خصوصية وسرية المعلومات أثناء العملية.</p>
                                <p class="fs-5 text-dark-emphasis">نطلاقاً من إيمان شركة أبعاد التطويرية لخدمات الأعمال بأهمية النقد الهادف والحوار البنَّاء والاستفادة من خبرات المختصين، وتجارب المستفيدين من خدماتها، والمشاركة في النهضة والتطوير وصنع القرار، فقد حرصت الشركة على استغلال التقنية الحديثة لإتاحة الفرص للجميع بالتواصل معها والمشاركة بتجاربهم ومقترحاتهم وحلولهم وأفكارهم ومشاكلهم من خلال العديد من الوسائل الإلكترونية المتنوعة.</p>
                                <p class="fs-5 text-dark-emphasis">تحرص شركة أبعاد التطويرية لخدمات الأعمال على الإشراف على جميع المشاركات ومراجعتها قبل النشر؛ لضمان الالتزام بقوانين الدولة بما يتعلق بهذا الخصوص والارتقاء بمستويات الحوار لتحقيق الأهداف المطلوبة.</p>
                                <p class="fs-5 text-dark-emphasis">تتيح الشركة عبر خدمة "صوتك مسموع" إمكانية التواصل مع مسؤوليها، وضمان الحرية التامة بالمشاركة وإتاحة الفرصة للجميع في إيصال أصواتهم للمسؤولين، كما تحتفظ الشركة بالحق في عدم نشر أو حذف ما ترى أنه يتعارض مع سياستها أو القوانين المعمول بها في المملكة العربية السعودية من المشاركات، ودون أن تكون مُلزَمَة بذلك. ولا يمكن بأي حال من الأحوال أن تكون الشركة أو موظفوها أو ممثلوها مسؤولة قانونياً عما يترتب على نشر تعليقات أو ملاحظات عبر وسائلها الإلكترونية للمشاركة.</p>
                                <p class="fs-5 text-dark-emphasis">توفر الشركة العديد من أدوات المشاركة الاجتماعية الإلكترونية كالتعليقات، والتقييمات، والتواصل المباشر، والمدونات، واستطلاعات الرأي، والاستبانات الموجهة، والشكاوى، والاقتراحات.</p>
                                <p class="fs-5 text-dark-emphasis"> قد تستخدم الشركة جميع أو بعضاً من هذه الوسائل في عملية المشاركة الإلكترونية في صناعة القرار حسب ما تراه مناسباً للموضوع المطروح، ويتم توضيح الوسائل المتاحة للمشاركة في كل موضوع يتم طرحه للنقاش.</p>
                                <p class="fs-5 text-dark-emphasis">تطلع شركة أبعاد التطويرية لخدمات الأعمال إلى طرح كل ما ترى أن من شأنه أن يساعدها بالقيام بدورها المنوط بها من خدمة المستفيدين بشكل عام للنقاش، وطلب المشورة من الخبراء وأصحاب الشأن والمصلحة المباشرة.  مدعوون مشكورين للمشاركة برؤاهم وخبراتهم التي يرون فيها المصلحة العامة من خلال جميع وسائل التواصل الاجتماعي الإلكترونية مع الشركة المتاحة على بوابتها الإلكترونية (التعليقات، التقييمات، التواصل المباشر، المدونات، استطلاعات الرأي، والاستبانات الموجهة).</p>
                                <p class="fs-5 text-dark-emphasis">طبيعة المواضيع المطروحة للنقاش تعتمد على حاجة الشركة للمشورة والمشاركة بالخبرات والآراء، كما تعتمد على مدى علاقة هذه المواضيع بالجمهور وتأثيراتها المباشرة عليهم، وتعتمد أيضاً على الأهداف المرجوة من طرح هذه المواضيع للنقاش، وتكون المواضيع متاحة للجميع للمشاركة وإبداء الرأي ما لم ترى الشركة ضرورة تحديد فئة مستهدفة في طلب المشورة (كالمنشآت الصغيرة والمتوسطة على سبيل المثال)، وفي ذلك الحين ستتبع الشركة الوسائل الإلكترونية المتاحة في استهداف تلك الفئة لطلب المشاركة في صناعة القرار.</p>
                                <p class="fs-5 text-dark-emphasis">تتعهد الشركة بمراجعة المشاركات بشكل دوري، ولكنها في ذات الوقت، ولكونه من غير الممكن مراجعة جميع المشاركات، غير ملزمة بمراجعة جميع المشاركات أو الرد عليها، كما تحتفظ الشركة بالحق في عدم نشر أو حذف ما ترى أنه يتعارض مع سياستها أو القوانين المعمول بها في المملكة العربية السعودية من المشاركات، ودون أن تكون مُلزَمَة بذلك، ولا يمكن بأي حال من الأحوال أن تكون الشركة أو موظفوها أو ممثلوها مسؤولة قانونياً عما يترتب من نشر تعليقات أو ملاحظات عبر وسائلها للمشاركة الإلكترونية.</p>
                                <p class="fs-5 text-dark-emphasis">إن التفاعل والمشاركة في وسائل الشركة للمشاركة الاجتماعية الإلكترونية يعني الموافقة الضمنية بحق الشركة في استخدام هذه المشاركات في عمليات صناعة القرار ورسم السياسات المستقبلية. وتهدف الشركة إلى نشر نتائج عمليات المشاركة الإلكترونية في صناعة القرار وأرشفتها، إلا أنها غير ملزمة إلزاما قطعيا بذلك.</p>
                                <p class="fs-5 text-dark-emphasis">الإدارة المشرفة على المشاركة المجتمعية:</p>
                                <p class="fs-5 text-dark-emphasis">تعد إدارة التواصل المؤسسي هي الإدارة المشرفة على المشاركة المجتمعية.</p>
                                <p class="fs-5 text-dark-emphasis fw-semibold">الشروط والضوابط</p>
                                <p class="fs-5 text-dark-emphasis">لضمان تحقيق الأهداف المرجوة وعكس الصورة المتوقعة لآداب وثقافة المشاركين، تأمل شركة أبعاد التطويرية لخدمات العمال منكم الاطلاع على الشروط والضوابط ادناه للمشاركة الإلكترونية المتاحة.</p>
                                <p class="fs-5 text-dark-emphasis fw-semibold">هذه الإرشادات تشمل التزام المشاركات بالتالي:</p>
                                <p class="fs-5 text-dark-emphasis">-	أن تلتزم المشاركة بتعاليم وآداب الدين الإسلامي الحنيف والأعراف والتقاليد الوطنية السائدة.</p>
                                <p class="fs-5 text-dark-emphasis">-	أن تلتزم المشاركة بقوانين الدولة ذات العلاقة.</p>
                                <p class="fs-5 text-dark-emphasis">-	أن تكون المشاركة مكتوبة بلغة واضحة.</p>
                                <p class="fs-5 text-dark-emphasis">-	عدم إرسال المشاركة لأكثر من مرة.</p>
                                <p class="fs-5 text-dark-emphasis">-	الامتناع نهائيا عن كتابة أي عبارات مسيئة أو بذيئة أو أي كلمات تخدش الحياء أو تحمل ســبـاً أو قذفاً في أي شخص أو جهة أو تحوي معاني مسيئة دينياً أو طائفياً أو عنصرياً مهما كانت الأسباب.</p>
                                <p class="fs-5 text-dark-emphasis">-	الحرص عند كتابة نصوص دينية آيات وأحاديث وخلافه في المشاركات الواردة إلى الموقع منعا للتحريف أو الخطأ في عباراتها، وكذلك يرجى عدم استخدامها في غير موضعها الصحيح.</p>
                                <p class="fs-5 text-dark-emphasis">-	مراعاة قواعد اللغة العربية الفصحى والإملاء قدر المستطاع.</p>
                                <p class="fs-5 text-dark-emphasis">-	أن تتسم المشاركة بالجدية والموضوعية والوضوح والاختصار.</p>
                                <p class="fs-5 text-dark-emphasis">-	عدم نشر البيانات الشخصية كالأسماء وبيانات الاتصال والعناوين، وعدم التسويق لأي جهة أخرى.</p>
                                <p class="fs-5 text-dark-emphasis">-	عدم إساءة استخدام أنظمة الشركة للمشاركة الإلكترونية بما يؤثر على أدائها، أو مستوى أمانها، أو سرعتها، أو استمراريتها، أو حرمان الآخرين من الاستفادة منها</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
