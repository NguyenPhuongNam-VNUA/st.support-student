function openModal(imageUrl) {
    document.getElementById('imageModal').style.display = "block";
    document.getElementById('modalImage').src = imageUrl;
}

function closeModal() {
    document.getElementById('imageModal').style.display = "none";
}

mapboxgl.accessToken = 'pk.eyJ1IjoieHVhbnBob25nMDkiLCJhIjoiY20yaXJreWhkMDFlYzJqcXR4MHNqbHc2aCJ9.sfY1bJbQMnBUemqu9nLKdw';
var map = new mapboxgl.Map({
    container: 'map', // ID của thẻ chứa bản đồ
    style: 'mapbox://styles/xuanphong09/cm2isc2jb00bm01pea2iah9ej', // Style URL từ Mapbox Studio
    center: [105.933972, 21.00807], // Tọa độ trung tâm
    zoom: 16, // Mức zoom ban đầu
    pitch: 50, // Góc nghiêng của bản đồ (dùng cho 3D)
    bearing: -91, // Hướng quay của bản đồ (để tạo góc nhìn 3D hợp lý)
    antialias: true // Làm mịn hình ảnh, giúp hiển thị 3D rõ hơn
});

// chuyen doi giua 2D va 3D
var is3D = true;
document.getElementById('toggleView').addEventListener('click', function () {
    if (is3D) {
        // Chuyển sang 2D
        map.easeTo({
            pitch: 0, // Góc nghiêng 0 cho 2D
            bearing: -80, // Quay về hướng mặc định
            duration: 1000 // Thời gian chuyển đổi (ms)
        });
        this.textContent = "3D";
    } else {
        // Chuyển sang 3D
        map.easeTo({
            pitch: 60, // Góc nghiêng 60 độ cho 3D
            bearing: -80, // Hướng quay phù hợp cho góc nhìn 3D
            duration: 1000
        });
        this.textContent = "2D";
    }
    is3D = !is3D;
});

map.on('load', function () {
    // Tạo một Polygon lớn bao quanh toàn bộ khu vực bản đồ (masking area)
    var outerBoundary = [
        [
            [105.8, 20.9], // Một tọa độ rất xa để bao quanh bản đồ
            [106.0, 20.9],
            [106.0, 21.1],
            [105.8, 21.1],
            [105.8, 20.9]
        ]
    ];

    // Tọa độ của vùng ranh giới bạn muốn hiển thị (inner boundary)
    var innerBoundary = [
        [
            [105.9303977834607, 20.99937152821748],
            [105.93572739328988, 20.99888173353355],
            [105.93590458800503, 20.99958752095779],
            [105.93729201399057, 20.99951421228438],
            [105.93949144855392, 21.001073213828242],
            [105.93832341495109, 21.002092396422285],
            [105.93691178708326, 21.003022592025793],
            [105.93719623679038, 21.003512400016213],
            [105.93753364177053, 21.003893446925865],
            [105.9370774720183, 21.003990037607245],
            [105.93736588966844, 21.004963366715558],
            [105.93412899111442, 21.005445853597415],
            [105.93425612647918, 21.00627694248037],
            [105.9342662720909, 21.006342650091806],
            [105.93395220702757, 21.006389717737],
            [105.93404686981648, 21.006967700803656],
            [105.93327879495106, 21.007284698546936],
            [105.93343272693174, 21.00764129127171],
            [105.93407903781534, 21.007332359989526],
            [105.9354647495347, 21.006779133997934],
            [105.93584467154533, 21.007506190992032],
            [105.93496872574636, 21.007908995844378],
            [105.93553533729137, 21.008994977194952],
            [105.9344659683617, 21.009484442120222],
            [105.9344631616344, 21.00971703374367],
            [105.93464767981249, 21.010231996397685],
            [105.93535365699802, 21.011210239962132],
            [105.93627128033987, 21.013453281711442],
            [105.93639903211115, 21.014158822861333],
            [105.93563629526781, 21.01400803881942],
            [105.93565449385176, 21.01535314750508],
            [105.93588170415686, 21.01721691959358],
            [105.9365901115473, 21.020716687706447],
            [105.930215614947, 21.020167549267796],
            [105.92598746273282, 21.01971080396799],
            [105.92646196570148, 21.01476029168254],
            [105.92727554833047, 21.01416731745978],
            [105.92809126618188, 21.013280883689394],
            [105.92860958291652, 21.011700393076403],
            [105.92910240734031, 21.009165570522022],
            [105.9295952317641, 21.00663074796764],
            [105.92984673444118, 21.004164999133685],
            [105.92888444564248, 21.001075365140576],
            [105.93003389129754, 20.99986673725261],
            [105.93042360825586, 20.999388859333294]
        ]
    ];

    // Thêm nguồn GeoJSON với 2 Polygon: 1 lớn bao quanh và 1 nhỏ bên trong
    map.addSource('mask', {
        'type': 'geojson',
        'data': {
            'type': 'Feature',
            'geometry': {
                'type': 'Polygon',
                'coordinates': [
                    outerBoundary[0], // Polygon bao quanh lớn
                    innerBoundary[0]  // Polygon bên trong (vùng được hiển thị)
                ]
            }
        }
    });

    // Thêm lớp phủ polygon với fill để tạo masking
    map.addLayer({
        'id': 'mask-layer',
        'type': 'fill',
        'source': 'mask',
        'layout': {},
        'paint': {
            'fill-color': '#000', // Màu đen cho vùng bị che
            'fill-opacity': 0.5 // Độ mờ của vùng bị che (0.5 nghĩa là trong suốt 50%)
        }
    });
});

//thêm nhãn
var labeledPoints = {
    'type': 'FeatureCollection',
    'features': [
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.9316462189887, 21.004961621889592],
            },
            'properties': {
                'name': 'Tòa nhà Bùi Huy Đáp',
                'icon': 'location-icon', // Tên icon tùy chỉnh,
                'note': 'Vị trí: Cạnh gđ Nguyễn Đăng, Quảng trường sinh viên, gđ B, 4 Hồ. ',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 1
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93224563539826, 21.00590412126752]
            },
            'properties': {
                'name': 'Giảng đường Nguyễn Đăng',
                'icon': 'classroom-icon', // Tên icon tùy chỉnh,
                'note': 'Vị trí: Cạnh tòa nhà Bùi Huy Đáp, 4 Hồ.',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 2

        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.9327710792951, 21.004845089032997]
            },
            'properties': {
                'name': ' Ngã tư 4 hồ',
                'icon': 'location-icon', // Tên icon tùy chỉnh,
                'note': 'Vị trí: Cạnh tòa nhà Bùi Huy Đáp, gđ Nguyễn Đăng, gđ B , gđ C',
                'images': 'assets/client/image/map/image/4ho.jpg'
            },
            'id': 3
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93189658680785, 21.004141904491306]
            },
            'properties': {
                'name': 'Giảng đường B',
                'icon': 'classroom-icon', // Tên icon tùy chỉnh,
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 4
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93203329893919, 21.00375014994883]
            },
            'properties': {
                'name': 'Giảng đường D',
                'icon': 'classroom-icon', // Tên icon tùy chỉnh,
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 5
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93375945030681, 21.005619838339584]
            },
            'properties': {
                'name': 'Giảng đường A',
                'icon': 'classroom-icon', // Tên icon tùy chỉnh,
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 6
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93354512258031, 21.003758223404915]
            },
            'properties': {
                'name': 'Giảng đường C',
                'icon': 'classroom-icon', // Tên icon tùy chỉnh,
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 7
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93251540055331, 21.00805161418448]
            },
            'properties': {
                'name': 'Giảng đường E',
                'icon': 'classroom-icon', // Tên icon tùy chỉnh,
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 8
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93269219096396, 21.008960559220114]
            },
            'properties': {
                'name': 'Giảng đường Trung tâm',
                'icon': 'classroom-icon', // Tên icon tùy chỉnh,
                'note': 'Vị trí: Cạnh ...',
                'images': 'assets/client/image/map/image/gdTT.jpg'
            },
            'id': 9
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93399905282251, 21.00757445498256]
            },
            'properties': {
                'name': 'Giảng đường Cơ điện',
                'icon': 'classroom-icon', // Tên icon tùy chỉnh,
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 10
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.9345011667557, 21.00844971846864]
            },
            'properties': {
                'name': 'Khoa Cơ điện',
                'icon': 'locationedit-icon', // Tên icon tùy chỉnh,
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 11
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93213951901748, 21.012763336747128]
            },
            'properties': {
                'name': 'Tòa nhà Trung tâm',
                'icon': 'location-icon', // Tên icon tùy chỉnh,
                'note': 'Vị trí: Cạnh ...',
                'images': 'assets/client/image/map/image/toanhaTT.jpg'
            },
            'id': 12
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93232431341312, 21.013415722658692]
            },
            'properties': {
                'name': 'Hội trường Trung tâm',
                'icon': 'roommeeting-icon', // Tên icon tùy chỉnh,
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 13
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93147378806782, 21.012446403420967]
            },
            'properties': {
                'name': 'Hội trường nguyệt quế',
                'icon': 'roommeeting-icon', // Tên icon tùy chỉnh,
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 14
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.92942256829576, 21.01109857918253]
            },
            'properties': {
                'name': 'Trung tâm nghiên cứu và đổi mới xuất sắc',
                'icon': 'location-icon', // Tên icon tùy chỉnh,
                'note': 'Vị trí: Cạnh ...',
                'images': 'assets/client/image/map/image/ttNCKHxs.jpg'
            },
            'id': 15
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93255816694494, 21.0068227380536]
            },
            'properties': {
                'name': 'Khoa Công nghệ Thực phẩm',
                'icon': 'locationedit-icon', // Tên icon tùy chỉnh,
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 16
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93180171098317, 21.00691133840803]
            },
            'properties': {
                'name': 'Khoa Công nghê sinh học',
                'icon': 'locationedit-icon', // Tên icon tùy chỉnh,
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 17
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93262747160668, 21.00837998985213]
            },
            'properties': {
                'name': 'Khoa Tài Nguyên và Môi Trường',
                'icon': 'locationedit-icon', // Tên icon tùy chỉnh,
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 18
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93353629992339, 21.017366279746867]
            },
            'properties': {
                'name': 'Khoa Du lịch và Ngoại ngữ',
                'icon': 'locationedit-icon', // Tên icon tùy chỉnh,
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 19
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93534188541378, 21.017438001562297]
            },
            'properties': {
                'name': 'Khoa Thú y',
                'icon': 'locationedit-icon', // Tên icon tùy chỉnh,
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 20
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93205354922333, 21.0018537432057]
            },
            'properties': {
                'name': 'Khoa Nông học',
                'icon': 'locationedit-icon', // Tên icon tùy chỉnh,
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 21
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93041668243166, 21.006050345508953]
            },
            'properties': {
                'name': 'Khoa Môi trường và Thú y',
                'icon': 'locationedit-icon', // Tên icon tùy chỉnh,
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 22
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93249729706366, 21.017986690559823]
            },
            'properties': {
                'name': 'Khoa Thủy sản',
                'icon': 'locationedit-icon', // Tên icon tùy chỉnh,
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 23
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93384050934009, 21.01836676825816]
            },
            'properties': {
                'name': 'Bệnh viện Thú y',
                'icon': 'location-icon', // Tên icon tùy chỉnh,
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 24
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93065101829654, 21.005138739568253]
            },
            'properties': {
                'name': 'Quảng Trường Sinh Viên',
                'icon': 'location-icon', // Tên icon tùy chỉnh,
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 25
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.9339607021368, 21.0179602200259]
            },
            'properties': {
                'name': 'Vnua Pharma',
                'icon': 'location-icon', // Tên icon tùy chỉnh,
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 26
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93451494049748, 21.003944861456247]
            },
            'properties': {
                'name': 'Hội sinh viên',
                'icon': 'location-icon', // Tên icon tùy chỉnh,
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 27
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93056565300958, 21.00658831227308]
            },
            'properties': {
                'name': 'Giảng đường Giáo dục Quốc Phòng ',
                'icon': 'classroom-icon', // Tên icon tùy chỉnh,
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 28
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93443572613887, 21.003657020494572]
            },
            'properties': {
                'name': 'Ký túc xá A1',
                'icon': 'ktx-icon',
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 29
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93550670279393,21.00338057277095]
            },
            'properties': {
                'name': 'Ký túc xá A2',
                'icon': 'ktx-icon',
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 30
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.9364557692652, 21.00314789516483]
            },
            'properties': {
                'name': 'Ký túc xá A3',
                'icon': 'ktx-icon',
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 31
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93552344280664, 21.002724314811616]
            },
            'properties': {
                'name': 'Ký túc xá B3',
                'icon': 'ktx-icon',
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 32
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93624343011936, 21.002547432130058]
            },
            'properties': {
                'name': 'Ký túc xá B4',
                'icon': 'ktx-icon',
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 33
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93705294666375, 21.00254149139944]
            },
            'properties': {
                'name': 'Ký túc xá C2',
                'icon': 'ktx-icon',
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 34
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.9373918424098, 21.002362717160267]
            },
            'properties': {
                'name': 'Ký túc xá C2',
                'icon': 'ktx-icon',
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 35
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.9371793675216, 21.001959395850022]
            },
            'properties': {
                'name': 'Ký túc xá C3',
                'icon': 'ktx-icon',
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 36
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93683820015235, 21.001520000561044]
            },
            'properties': {
                'name': 'Ký túc xá C4',
                'icon': 'ktx-icon',
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 37
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93737360857955, 21.00136656056158]
            },
            'properties': {
                'name': 'Ký túc xá C5',
                'icon': 'ktx-icon',
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 38
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93676513019363, 21.002042965567185]
            },
            'properties': {
                'name': 'Nhà ăn Sinh viên',
                'icon': 'restaurant-icon',
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 39
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.9363969399185, 21.002202256142652]
            },
            'properties': {
                'name': 'Nhà ăn sau B4',
                'icon': 'restaurant-icon',
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 40
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93604899751716, 21.002350748603774]
            },
            'properties': {
                'name': 'Bãi gửi xe sau B4',
                'icon': 'park-icon',
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 41
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93784029389661, 21.002053649578684]
            },
            'properties': {
                'name': 'Ký túc xá Cao học',
                'icon': 'ktx-icon',
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 42
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.935849429634, 21.003657121874852]
            },
            'properties': {
                'name': 'Bãi gửi xe sân thể chất',
                'icon': 'park-icon',
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 43
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93484915990808, 21.003850464821426]
            },
            'properties': {
                'name': 'Bãi gửi xe ký túc xá',
                'icon': 'park-icon',
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 44
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93241237901236, 21.00350880883741]
            },
            'properties': {
                'name': 'Bãi gửi xe sau gđ B',
                'icon': 'park-icon',
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 45
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93321290834285, 21.005994946386792]
            },
            'properties': {
                'name': 'Bãi gửi xe gđ A',
                'icon': 'park-icon',
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 46
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93096751327448, 21.006017515556692]
            },
            'properties': {
                'name': 'Bãi gửi xe gđ Nguyễn Đăng',
                'icon': 'park-icon',
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 47
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.93483086619261, 21.00302422082619]
            },
            'properties': {
                'name': 'Thư viện Lương Đình Của',
                'icon': 'classroom-icon-1',
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 48
        },
        {
            'type': 'Feature',
            'geometry': {
                'type': 'Point',
                'coordinates': [105.9351213459326, 21.00408177937902]
            },
            'properties': {
                'name': 'Tram y tế Vnua',
                'icon': 'location-icon',
                'note': 'Vị trí: Cạnh ...',
                'images': 'https://via.placeholder.com/200x400'
            },
            'id': 49
        },
    ]
};

map.on('load', function () {
    // Đăng ký biểu tượng icon tùy chỉnh (nếu có)
    map.loadImage('assets/client/image/map/icon/location.png', function (error, image) {
        if (error) throw error;
        map.addImage('location-icon', image); // Tên icon là 'custom-icon'

        // Đăng ký icon mới
        map.loadImage('assets/client/image/map/icon/classroom1.png', function (error, newImage) {
            if (error) throw error;
            map.addImage('classroom-icon', newImage); // Tên icon là 'new-icon'
        });
        map.loadImage('assets/client/image/map/icon/classroom.png', function (error, newImage) {
            if (error) throw error;
            map.addImage('classroom-icon-1', newImage); // Tên icon là 'new-icon'
        });
        map.loadImage('assets/client/image/map/icon/roommeeting.png', function (error, newImage) {
            if (error) throw error;
            map.addImage('roommeeting-icon', newImage); // Tên icon là 'new-icon'
        });
        map.loadImage('assets/client/image/map/icon/locationedit.png', function (error, newImage) {
            if (error) throw error;
            map.addImage('locationedit-icon', newImage); // Tên icon là 'new-icon'
        });
        map.loadImage('assets/client/image/map/icon/ktx.png', function (error, newImage) {
            if (error) throw error;
            map.addImage('ktx-icon', newImage); // Tên icon là 'new-icon'
        });
        map.loadImage('assets/client/image/map/icon/restaurant.png', function (error, newImage) {
            if (error) throw error;
            map.addImage('restaurant-icon', newImage); // Tên icon là 'new-icon'
        });
        map.loadImage('assets/client/image/map/icon/park.png', function (error, newImage) {
            if (error) throw error;
            map.addImage('park-icon', newImage); // Tên icon là 'new-icon'
        });
        // Thêm nguồn dữ liệu chứa điểm với icon và nhãn
        map.addSource('labeled-points-with-icons', {
            'type': 'geojson',
            'data': labeledPoints
        });

        // Thêm lớp biểu tượng
        map.addLayer({
            'id': 'icon-labels',
            'type': 'symbol',
            'source': 'labeled-points-with-icons',
            'layout': {
                'icon-image': ['get', 'icon'], // Sử dụng thuộc tính 'icon' để chỉ định biểu tượng
                'icon-size': 0.6, // Kích thước của icon
                'text-field': ['step', ['zoom'], '', 17, ['get', 'name']], // Lấy thuộc tính 'name' để hiển thị nhãn
                'text-size': 12, // Kích thước của nhãn
                'text-anchor': 'top', // Định vị nhãn ở phía trên icon
                'text-offset': [0, 1.5], // Đặt khoảng cách giữa nhãn và biểu tượng
                'icon-allow-overlap': true, // Cho phép các icon chồng lên nhau nếu cần
                'text-allow-overlap': true // Cho phép các nhãn chồng lên nhau nếu cần
            },
            'paint': {
                'text-color': '#000000' // Màu của nhãn (đen)
            },
            'minzoom': 15, // Mức zoom tối thiểu để hiển thị vùng sáng (chỉnh giá trị theo nhu cầu)
            'maxzoom': 20  // Mức zoom tối đa (nếu cần)
        });
    });

    // Lắng nghe sự kiện click để hiển thị popup
    map.on('click', 'icon-labels', function (e) {
        // Lấy tọa độ, tên và ghi chú của điểm được click
        var coordinates = e.features[0].geometry.coordinates.slice();
        var name = e.features[0].properties.name;
        var imageUrl  = e.features[0].properties.images;
        var note = e.features[0].properties.note;// Lấy ghi chú

        // Tạo URL chỉ đường với tọa độ
        var directionsUrl = `https://www.google.com/maps/dir/?api=1&destination=${coordinates[1]},${coordinates[0]}`;


        // Tạo popup với ghi chú và tùy chọn mở liên kết chỉ đường
        new mapboxgl.Popup({ className: 'fixed-popup' })
            .setLngLat(coordinates)
            .setHTML(
                '<strong>' + name + '</strong>' +'<br>'+
                '<img src="'+imageUrl+'" alt="'+name+'" style="width: 98%; height: 100px; object-fit: cover" onclick="openModal(\'' + imageUrl + '\')"/>' +
                '<br>' + note + '<br>' +
                '<a href="' + directionsUrl + '" target="_blank" style="color:#066140 ">Chỉ đường đến đây</a>')
            .addTo(map);
    });

// Đổi con trỏ thành dạng bàn tay khi di chuột qua điểm
    map.on('mouseenter', 'icon-labels', function () {
        map.getCanvas().style.cursor = 'pointer';
    });

// Đổi lại con trỏ thành bình thường khi rời khỏi điểm
    map.on('mouseleave', 'icon-labels', function () {
        map.getCanvas().style.cursor = '';
    });


});




