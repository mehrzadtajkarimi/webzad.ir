﻿<section id="nemonekar">
    <div class="container">
        <div class="row mt-3 mb-3">
            <div class="col-12">
                <P class="text-center ">جدیدترین وبسایت های طراحی شده</P>
            </div>
        </div>

        <div class="row mt-3 mb-3">
            <div class="Type-design col-md-4 d-flex justify-content-center  m-md-0 m-sm-2">
                <div class="Type-design-template">
                    <div class="flip-box bg-transparent cursor-pointer">
                        <div class="flip-box-inner">
                            <div class="flip-box-front bg-light shadow">
                                <span class="d-flex justify-content-center"><i class="fas fa-7x fa-building p-3 "></i></span>
                                <p class="text-center font-small"> سایت شرکتی</p>
                            </div>
                            <div  class="flip-box-back d-flex justify-content-center bg-light shadow">
                                <img  src="public/image/Type-design-company.jpg" alt="contract_management">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Type-design col-md-4 d-flex justify-content-center  m-md-0 m-sm-2">
                <div class="Type-design-template">
                    <div class="flip-box bg-transparent cursor-pointer">
                        <div class="flip-box-inner">
                            <div class="flip-box-front bg-light shadow">
                                <span class="d-flex justify-content-center"><i class="fas fa-7x fa-shopping-basket p-3 "></i></span>
                                <p class="text-center font-small"> سایت فروشگاهی</p>
                            </div>
                            <div class="flip-box-back d-flex justify-content-center bg-light shadow">
                                <img src="public/image/Type-design-store.jpg" alt="contract_management">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="Type-design col-md-4 d-flex justify-content-center  m-md-0 m-sm-2">
                <div class="Type-design-template">
                    <div class="flip-box bg-transparent cursor-pointer">
                        <div class="flip-box-inner">
                            <div class="flip-box-front bg-light shadow">
                                <span class="d-flex justify-content-center"><i class="fas fa-7x fa-user-tie p-3 "></i></span>
                                <p class="text-center font-small">سایت شخصی</p>
                            </div>
                            <div class="flip-box-back d-flex justify-content-center bg-light shadow">
                                <img src="public/image/Type-design-personal.jpg" alt="contract_management">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="Type-design-offer">
            <section class="Type-design-company  mb-5 mt-3 display-none ">

            </section>
            <section class="Type-design-company  mb-5 mt-3 display-none ">

            </section>
            <section class="Type-design-company  mb-5 mt-3 display-none ">

            </section>
        </div>
    </div>
</section>

<script type="text/javascript">
    $("#nemonekar .Type-design").click(function () {
        $("#nemonekar .Type-design").find(".flip-box-front , .flip-box-back").removeClass("border border-secondary text-muted ");
        $("#Type-design-offer section").stop().fadeOut(0);

        var index = $(this).index();
        var section_selected = $("#Type-design-offer section").eq(index);

        var url = '<?= URL ?>index/tab';
        var data = {'number': index};

        $.post(url, data, function (msg) {
            section_selected.html(msg);
        });
        section_selected.fadeIn(500);
        $(this).find(".flip-box-front , .flip-box-back").addClass("border border-secondary text-muted ");
    });

</script>
