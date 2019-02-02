<?php

use yii\helpers\Html;
use common\models\Product;
use yii\helpers\Url;

?>

<nav class="top-catalog">
    <div>
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             x="0px" y="0px"
             viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<circle style="fill:#FF2746;" cx="256" cy="256" r="256"/>
            <path style="fill:#940030;" d="M344.781,110.33L262.896,0l-6.041,132.727L174.114,13.378l-13.791,128.845l-53.441,170.667
	l195.003,195.003C421.373,486.267,512,381.721,512,256c0-33.833-6.578-66.127-18.503-95.692L351.692,18.503
	C334.672,11.638,352.827,112.054,344.781,110.33z"/>
            <g>
                <rect x="249.104" style="fill:#FFEDB5;" width="13.791" height="170.667"/>
                <rect x="249.104" style="fill:#FFEDB5;" width="6.322" height="170.667"/>
            </g>
            <rect x="255.431" style="fill:#FEE187;" width="7.47" height="170.667"/>
            <path style="fill:#FFFFFF;"
                  d="M337.886,13.379v105.57h13.791V18.496C347.141,16.667,342.547,14.951,337.886,13.379z"/>
            <path style="fill:#FDE085;" d="M405.118,312.889H284.444l8.701-139.216c2.084-33.342,21.756-63.055,51.636-77.996l0,0l0,0
	c29.88,14.941,49.552,44.654,51.636,77.996L405.118,312.889z"/>
            <path style="fill:#FFFFFF;"
                  d="M160.323,18.496v100.454h13.791V13.379C169.453,14.951,164.859,16.667,160.323,18.496z"/>
            <path style="fill:#FFEDB5;" d="M227.556,312.889H106.882l8.701-139.216c2.084-33.342,21.756-63.055,51.636-77.996l0,0l0,0
	c29.88,14.941,49.552,44.654,51.636,77.996L227.556,312.889z"/>
            <path style="fill:#F9D56E;" d="M316.337,364.606H195.663l8.701-139.216c2.084-33.342,21.756-63.055,51.636-77.996l0,0l0,0
	c29.88,14.941,49.552,44.654,51.636,77.996L316.337,364.606z"/>
            <path style="fill:#FFC61B;" d="M307.636,225.39c-2.084-33.342-21.756-63.055-51.636-77.996c-0.193,0.097-0.381,0.202-0.574,0.298
	v216.914h60.911L307.636,225.39z"/>
            <path style="fill:#F9D56E;"
                  d="M204.364,225.39l-8.701,139.216h59.763V147.692C225.87,162.726,206.434,192.264,204.364,225.39z"/>
</svg>

        <span><?= Html::a(Product::categoryName(
                Product::CATEGORY_LUSTER),
                Url::toRoute(['/category/' . Product::CATEGORY_LUSTER]),
                ['title' => Product::categoryName(Product::CATEGORY_LUSTER)])
            ?>
            <div class="sub-menu">
            <?php foreach (Product::getCategorySubs(Product::CATEGORY_LUSTER) as $id => $name) echo
                Html::a($name,
                    Url::toRoute(['/category/' . Product::CATEGORY_LUSTER . '/sub/' . $id]),
                    ['title' => $name]) ?>
            </div>
        </span>
    </div>

    <div>
        <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             x="0px" y="0px"
             viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<circle style="fill:#366796;" cx="256" cy="256" r="256"/>
            <path style="fill:#273B7A;" d="M511.071,277.764L352.682,119.375L170.515,256l103.012,87.057l-26.872-3.448L113.778,227.556
	L85.333,369.778L225.77,510.214C235.685,511.381,245.77,512,256,512C390.053,512,500.022,408.96,511.071,277.764z"/>
            <path style="fill:#D48B07;" d="M284.444,355.125H113.778c-7.616,0-13.791-6.175-13.791-13.791c0-7.616,6.175-13.791,13.791-13.791
	h156.875v-99.987c0-7.616,6.175-13.791,13.791-13.791s13.791,6.175,13.791,13.791v113.778
	C298.236,348.95,292.061,355.125,284.444,355.125z"/>
            <path style="fill:#FF5419;" d="M284.444,213.764c-1.09,0-2.143,0.14-3.16,0.378v140.983h3.16c7.616,0,13.791-6.175,13.791-13.791
	V227.556C298.236,219.939,292.061,213.764,284.444,213.764z"/>
            <polygon style="fill:#FFC61B;" points="398.222,256 170.515,256 216.055,119.375 352.68,119.375 "/>
            <polygon style="fill:#D48B07;" points="352.68,119.375 281.285,119.375 281.285,256 398.222,256 "/>
            <rect x="85.333" y="227.556" style="fill:#FF5419;" width="28.444" height="142.222"/>
</svg>
        <span><?= Html::a(Product::categoryName(
                Product::CATEGORY_WALL_LAMP),
                Url::toRoute(['/category/' . Product::CATEGORY_WALL_LAMP]),
                ['title' => Product::categoryName(Product::CATEGORY_WALL_LAMP)])
            ?>
            <div class="sub-menu">
            <?php foreach (Product::getCategorySubs(Product::CATEGORY_WALL_LAMP) as $id => $name) echo
            Html::a($name,
                Url::toRoute(['/category/' . Product::CATEGORY_WALL_LAMP . '/sub/' . $id]),
                ['title' => $name]) ?>
            </div>
        </span>
    </div>

    <div>
        <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             x="0px" y="0px"
             viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<circle style="fill:#386895;" cx="256" cy="256" r="256"/>
            <path style="fill:#273B7A;" d="M303.926,507.502c116.217-22.014,204.641-122.565,207.97-244.381L352.539,103.764L294.96,208.148
	l-7.621-7.621l-127.878,79.446l46.906,50.981l-4.884,5.137l59.976,63.317l-50.369,15.258L303.926,507.502z"/>
            <path style="fill:#FFEDB5;" d="M294.536,402.491h-30.779V256.098c0-4.284-3.474-7.758-7.758-7.758c-4.284,0-7.758,3.474-7.758,7.758
	v146.392h-30.779c-4.284,0-7.758,3.474-7.758,7.758s3.474,7.758,7.758,7.758h77.074c4.284,0,7.758-3.474,7.758-7.758
	S298.822,402.491,294.536,402.491z"/>
            <path style="fill:#FEE187;" d="M294.536,402.491h-30.779V256.098c0-4.284-3.474-7.758-7.758-7.758v169.665h38.536
	c4.284,0,7.758-3.474,7.758-7.758S298.822,402.491,294.536,402.491z"/>
            <path style="fill:#FFEDB5;" d="M204.616,337.484c-2.381,0-4.31-1.929-4.31-4.31v-77.076c0-2.381,1.929-4.31,4.31-4.31
	s4.31,1.929,4.31,4.31v77.076C208.925,335.553,206.996,337.484,204.616,337.484z"/>
            <rect x="159.461" y="103.762" style="fill:#FFC61B;" width="193.077" height="176.218"/>
            <rect x="256" y="103.762" style="fill:#EAA22F;" width="96.539" height="176.218"/>
</svg>
        <span><?= Html::a(Product::categoryName(
                Product::CATEGORY_TABLE_LAMP),
                Url::toRoute(['/category/' . Product::CATEGORY_TABLE_LAMP]),
                ['title' => Product::categoryName(Product::CATEGORY_TABLE_LAMP)])
            ?>
            <div class="sub-menu">
            <?php foreach (Product::getCategorySubs(Product::CATEGORY_TABLE_LAMP) as $id => $name) echo
            Html::a($name,
                Url::toRoute(['/category/' . Product::CATEGORY_TABLE_LAMP . '/sub/' . $id]),
                ['title' => $name]) ?>
            </div>

        </span>
    </div>

    <div>
        <svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             x="0px" y="0px"
             viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<circle style="fill:#334D5C;" cx="256" cy="256" r="256"/>
            <path style="opacity:0.1;enable-background:new    ;" d="M262.837,0.171C260.56,0.112,258.293,0,256,0
	c-2.245,0-4.459,0.112-6.693,0.171v137.637c-75.147,3.36-135.573,63.2-139.947,138.08c-0.16,2.347,0.747,4.533,2.24,6.08
	l218.965,218.965C435.573,469.003,512,371.44,512,256c0-2.293-0.112-4.56-0.171-6.837L262.837,0.171z"/>
            <rect x="249.333" style="fill:#FFFFFF;" width="13.333" height="192.267"/>
            <path style="fill:#EBF0F3;" d="M256,137.648c-78.219,0-142.16,61.131-146.651,138.224c-0.277,4.715,3.536,8.677,8.261,8.677h276.779
	c4.725,0,8.539-3.963,8.261-8.677C398.16,198.779,334.219,137.648,256,137.648z"/>
            <path style="fill:#E1E6E9;" d="M243.584,150c-1.44,0-2.869,0.059-4.299,0.101c67.856,6.587,120.731,59.083,120.731,122.875h18.064
	C378.075,205.061,317.861,150,243.584,150z"/>
            <g>
                <path style="fill:#FCD462;" d="M256,350.747c36.56,0,66.192-29.637,66.192-66.192H189.808
		C189.808,321.109,219.44,350.747,256,350.747z"/>
                <rect x="253.12" y="360.8" style="fill:#FCD462;" width="5.787" height="13.547"/>

                <rect x="294.66" y="349.654" transform="matrix(0.866 -0.5001 0.5001 0.866 -138.3728 196.5939)"
                      style="fill:#FCD462;" width="5.786" height="13.546"/>

                <rect x="177.291" y="323.185" transform="matrix(0.8661 -0.4999 0.4999 0.8661 -138.3556 135.6785)"
                      style="fill:#FCD462;" width="13.547" height="5.787"/>

                <rect x="207.693" y="353.595" transform="matrix(0.4999 -0.8661 0.8661 0.4999 -201.4937 364.0286)"
                      style="fill:#FCD462;" width="13.547" height="5.787"/>

                <rect x="325.017" y="319.318" transform="matrix(0.4999 -0.8661 0.8661 0.4999 -118.4329 447.08)"
                      style="fill:#FCD462;" width="5.787" height="13.547"/>
            </g>
</svg>
        <span><?= Html::a(Product::categoryName(
                Product::CATEGORY_MOUNT_LAMP),
                Url::toRoute(['/category/' . Product::CATEGORY_MOUNT_LAMP]),
                ['title' => Product::categoryName(Product::CATEGORY_MOUNT_LAMP)])
            ?>
            <div class="sub-menu">
            <?php foreach (Product::getCategorySubs(Product::CATEGORY_MOUNT_LAMP) as $id => $name) echo
            Html::a($name,
                Url::toRoute(['/category/' . Product::CATEGORY_MOUNT_LAMP . '/sub/' . $id]),
                ['title' => $name]) ?>
            </div>
        </span>
    </div>

    <div>
        <svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             x="0px" y="0px"
             viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<circle style="fill:#273B7A;" cx="256" cy="256" r="256"/>
            <path style="fill:#121149;" d="M305.648,78.352l-44.239,78.417l-88.157,20.88L256,260.396v197.301l-54.303,10.343l43.725,43.725
	c3.51,0.143,7.034,0.234,10.578,0.234c132.177,0,240.945-100.174,254.555-228.742L305.648,78.352z"/>
            <rect x="249.966" y="170.667" style="fill:#FFC61B;" width="12.067" height="284.444"/>
            <rect x="253.707" y="170.667" style="fill:#D48B07;" width="8.332" height="284.444"/>
            <polygon style="fill:#FF7F4F;" points="338.747,177.648 173.253,177.648 206.352,78.352 305.648,78.352 "/>
            <polygon style="fill:#E03A00;" points="305.648,78.352 253.702,78.352 253.702,177.648 338.747,177.648 "/>
            <rect x="201.697" y="447.354" style="fill:#FF7F4F;" width="108.606" height="20.687"/>
            <rect x="253.707" y="447.354" style="fill:#E03A00;" width="56.601" height="20.687"/>
</svg>
        <span><?= Html::a(Product::categoryName(
                Product::CATEGORY_FLOOR_LAMP),
                Url::toRoute(['/category/' . Product::CATEGORY_FLOOR_LAMP]),
                ['title' => Product::categoryName(Product::CATEGORY_FLOOR_LAMP)])
            ?>
            <div class="sub-menu">
            <?php foreach (Product::getCategorySubs(Product::CATEGORY_FLOOR_LAMP) as $id => $name) echo
            Html::a($name,
                Url::toRoute(['/category/' . Product::CATEGORY_FLOOR_LAMP . '/sub/' . $id]),
                ['title' => $name]) ?>
            </div>
        </span>
    </div>

    <div>
        <svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             x="0px" y="0px"
             viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<path style="fill:#47CEAC;" d="M512,256.006C512,397.402,397.394,512.004,256.004,512C114.606,512.004,0,397.402,0,256.006
	C-0.007,114.61,114.606,0,256.004,0C397.394,0,512,114.614,512,256.006z"/>
            <path style="fill:#36BB9A;" d="M506.306,309.739c-0.374-0.441-243.294-243.43-243.874-243.874c-1.505-1.966-3.765-3.316-6.432-3.316
	c-4.546,0-8.231,3.682-8.231,8.233v90.553h-32.928c-2.537,0-4.931,1.166-6.492,3.167l-74.087,94.981
	c-1.13,1.447-1.74,3.232-1.74,5.066v28.498c0,2.669,1.35,4.929,3.316,6.433c0.444,0.58,111.463,111.636,111.932,112.028v9.905
	c-0.208-0.195-0.482-0.303-0.708-0.477c-0.444-0.58-82.832-82.969-83.411-83.411c-1.504-1.966-3.765-3.317-6.432-3.317H91.36
	c-4.546,0-8.231,3.682-8.231,8.231c0,2.669,1.35,4.929,3.316,6.433c0.444,0.58,51.772,51.922,51.909,52.076l-11.104,9.252
	c-3.493,2.91-3.964,8.103-1.054,11.6c0.335,0.402,0.8,0.589,1.189,0.91c0.134,0.193,85.104,85.35,85.257,85.535
	c0.014,0.016,0.034,0.021,0.048,0.036c14.086,2.401,28.542,3.722,43.313,3.721C378.958,512.003,481.615,425.323,506.306,309.739z"/>
            <g>
                <path style="fill:#F4F6F9;" d="M176.642,369.037l-49.392,41.159c-3.493,2.91-3.964,8.103-1.053,11.6
		c1.628,1.953,3.967,2.958,6.326,2.958c1.857,0,3.726-0.627,5.265-1.905l49.392-41.159c3.493-2.91,3.964-8.103,1.053-11.6
		C185.325,366.593,180.135,366.127,176.642,369.037z"/>
                <path style="fill:#F4F6F9;" d="M256,375.364c-4.546,0-8.231,3.682-8.231,8.231v57.623c0,4.55,3.686,8.231,8.231,8.231
		s8.231-3.682,8.231-8.231v-57.623C264.232,379.046,260.546,375.364,256,375.364z"/>
                <path style="fill:#F4F6F9;" d="M165.447,342.436c0-4.55-3.686-8.231-8.231-8.231H91.36c-4.546,0-8.231,3.682-8.231,8.231
		s3.686,8.231,8.231,8.231h65.856C161.762,350.668,165.447,346.986,165.447,342.436z"/>
                <path style="fill:#F4F6F9;" d="M420.64,334.204h-65.856c-4.546,0-8.231,3.682-8.231,8.231s3.686,8.231,8.231,8.231h65.856
		c4.546,0,8.231-3.682,8.231-8.231S425.186,334.204,420.64,334.204z"/>
                <path style="fill:#F4F6F9;" d="M335.358,369.037c-3.497-2.91-8.683-2.436-11.593,1.053c-2.91,3.497-2.439,8.69,1.053,11.6
		l49.392,41.159c1.539,1.278,3.409,1.905,5.265,1.905c2.359,0,4.699-1.005,6.326-2.958c2.91-3.497,2.439-8.69-1.053-11.6
		L335.358,369.037z"/>
                <path style="fill:#F4F6F9;" d="M371.248,301.276c4.546,0,8.233-3.682,8.233-8.231v-28.498c0-1.833-0.611-3.617-1.741-5.065
		L303.651,164.5c-1.559-2.002-3.955-3.167-6.492-3.167h-32.928V70.78c0-4.55-3.686-8.231-8.231-8.231
		c-4.545,0-8.231,3.682-8.231,8.231v90.553h-32.928c-2.537,0-4.932,1.166-6.492,3.167l-74.087,94.981
		c-1.13,1.447-1.741,3.232-1.741,5.065v28.498c0,4.55,3.686,8.231,8.231,8.231h50.19c5.281,30.671,38.647,57.623,65.058,57.623
		s59.777-26.953,65.058-57.623h50.19V301.276z M148.985,267.375l69.875-89.58h74.281l69.875,89.58v17.437H148.985V267.375z
		 M256,342.436c-18.064,0-42.857-20.017-48.303-41.159h96.606C298.857,322.419,274.064,342.436,256,342.436z"/>
            </g>
</svg>
        <span><?= Html::a(Product::categoryName(
                Product::CATEGORY_SPOOT_LIGHT),
                Url::toRoute(['/category/' . Product::CATEGORY_SPOOT_LIGHT]),
                ['title' => Product::categoryName(Product::CATEGORY_SPOOT_LIGHT)])
            ?>
            <div class="sub-menu">
            <?php foreach (Product::getCategorySubs(Product::CATEGORY_SPOOT_LIGHT) as $id => $name) echo
            Html::a($name,
                Url::toRoute(['/category/' . Product::CATEGORY_SPOOT_LIGHT . '/sub/' . $id]),
                ['title' => $name]) ?>
            </div>
        </span>
    </div>


    <div>
        <svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             x="0px" y="0px"
             viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<circle style="fill:#273B7A;" cx="256" cy="256" r="256"/>
            <path style="fill:#121149;" d="M270.941,137.625L155.077,253.992l38.862,122.106l-13.321,31.03l103.345,103.345
	C412.191,496.54,512,387.934,512,256c0-1.408-0.031-2.81-0.053-4.215L387.88,127.719L270.941,137.625z"/>
            <circle style="fill:#FEE187;" cx="333.317" cy="182.269" r="25.719"/>
            <path style="fill:#FFC61B;" d="M316.388,162.961c-0.422,0.371-0.85,0.729-1.252,1.131c-10.043,10.043-10.043,26.327,0,36.373
	c10.043,10.045,26.328,10.043,36.373,0c0.402-0.402,0.762-0.831,1.131-1.252L316.388,162.961z"/>
            <g>
                <path style="fill:#FEE187;" d="M152.116,251.787L152.116,251.787c-5.022-5.022-5.022-13.164,0-18.185l109.116-109.116
		c5.022-5.022,13.164-5.022,18.185,0l0,0c5.022,5.022,5.022,13.164,0,18.185L170.301,251.787
		C165.279,256.809,157.139,256.809,152.116,251.787z"/>
                <path style="fill:#FEE187;" d="M147.82,238.495L147.82,238.495c6.725-2.288,14.031,1.31,16.317,8.037l49.671,146.129
		c2.286,6.723-1.312,14.027-8.035,16.313l0,0c-6.725,2.288-14.031-1.31-16.317-8.037l-49.671-146.129
		C137.5,248.086,141.097,240.781,147.82,238.495z"/>
            </g>
            <path style="fill:#71E2EF;" d="M299.698,112.833c-4.624-4.446-10.892-7.194-17.813-7.194c-14.205,0-25.719,11.514-25.719,25.719
	c0,7.011,2.813,13.36,7.363,17.999c-13.496,28.619-8.425,63.817,15.236,87.478l109.116-109.116
	C364.025,103.864,328.44,98.914,299.698,112.833z"/>
            <path style="fill:#38C6D9;" d="M256.165,131.358c0,7.011,2.813,13.36,7.363,17.999c-13.496,28.619-8.425,63.817,15.236,87.478
	l55.749-55.749l-69.296-69.296C259.686,116.508,256.165,123.518,256.165,131.358z"/>
            <g>
                <circle style="fill:#71E2EF;" cx="153.29" cy="254" r="25.719"/>
                <path style="fill:#71E2EF;" d="M294.743,413.762H191.867c-7.102,0-12.859-5.758-12.859-12.859l0,0
		c0-7.102,5.758-12.859,12.859-12.859h102.876c7.102,0,12.859,5.758,12.859,12.859l0,0
		C307.603,408.004,301.846,413.762,294.743,413.762z"/>
            </g>
            <path style="fill:#38C6D9;" d="M191.867,388.043c-7.102,0-12.86,5.758-12.86,12.859l0,0c0,7.102,5.758,12.859,12.86,12.859h50.916
	v-25.719h-50.916V388.043z"/>
</svg>
        <span><?= Html::a(Product::categoryName(
                Product::CATEGORY_OTHER),
                Url::toRoute(['/category/' . Product::CATEGORY_OTHER]),
                ['title' => Product::categoryName(Product::CATEGORY_OTHER)])
            ?>
            <div class="sub-menu">
            <?php foreach (Product::getCategorySubs(Product::CATEGORY_OTHER) as $id => $name) echo
            Html::a($name,
                Url::toRoute(['/category/' . Product::CATEGORY_OTHER . '/sub/' . $id]),
                ['title' => $name]) ?>
            </div>
        </span>
    </div>

</nav>


