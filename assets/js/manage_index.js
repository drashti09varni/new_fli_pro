var currentPageNumber = 1; // initialization before all functions
var dataAvailable = true;
$(function () {
    get_product_list(null, currentPageNumber);
});

$(window).scroll(function () {
    if (dataAvailable == true) {
        if ($(window).scrollTop() + 1 >= $(document).height() - $(window).height()) {
            currentPageNumber++;
            get_product_list(null, currentPageNumber);
        }
    }
});

async function get_product_list(data, currentPageNumber) {
    if (data && data != null && data.status == true) {
        var productData = data.data;
        var html = "";
        var i = 1;
        productData.forEach(function (value) {
            if (i % 2 != 0) {
                html += `<tr>`;
            }
            html += `<td class="Cs7ycL TcKeCe">
                        <a href="product-details/${value.md5_id}">
                            <div class="_2enssu">
                                <div style="position:relative;min-height:110px;min-width:110px">
                                    <div class="_3LXIRu">
                                        <div class="_2GaeWJ" style="width:110px;height:110px">
                                            <img class="_2puWtW _3a3qyb" src="${value.img1}">
                                        </div>
                                    </div>
                                    <div class="ico_ozm">
                                        <img src="${MAIN_URL}img/01VbM1sWrWL.png" width="16px">
                                    </div>
                                </div>
                                <div class="_24B_AU _3SexMn">${value.name}</div>
                                <span class="a-size-mini a-color-secondary">100+ bought in past month</span>
                                <div class="grt_jfhfj">Great Indian Festival</div>
                                <div class="_24B_AU _1AQnZC">
                                    <b class="selling-price"><span class="a-price-symbol">₹</span>${value.selling_price}</b>
                                    <span class="mrp">M.R.P: ${value.mrp}</span>
                                    (${((value.selling_price * 100) / value.mrp).toFixed(0)}% Off)
                                </div>
                                <div class="_24B_AU _1AQnZC as_gdf">
                                    <img src="${MAIN_URL}img/pro_mdh.png" width="77px">
                                </div>
                                <div class="ofr_text code">BUY 1 GET 1 FREE</div>
                                <div class="_3Nxu4r delivery-txt">Free Delivery in Two Days</div>
                            </div>
                        </a>
                    </td>`;
            if (i % 2 == 0) {
                html += `</tr>`;
            }
            i++;
        });
        if (currentPageNumber == 1) {
            $("#home_page_product").html(html);
        }
        else {
            $("#home_page_product").append(html);
        }
        $("#home_page_product .scaling-circle").remove();
        return false;
    }
    else if (data && data != null && data.status == false) {
        // showError(data.message);
        if (currentPageNumber == 1) {
            $("#home_page_product").html("<h1 class='no-data-found'>" + data.message + "</h1>");
        }
        $("#home_page_product .scaling-circle").remove();
        dataAvailable = false;
        return false;
    }
    else if (!data) {
        $("#home_page_product").append(getLoader());
        var length = 50;
        var start = (currentPageNumber - 1) * length;
        var req_data = {
            op: "get_products",
            page: currentPageNumber,
            start: start,
            length: length
        };
        doAPICall(req_data, function (res) { get_product_list(res, currentPageNumber) });
    }
    return false;
}
