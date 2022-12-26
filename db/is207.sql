-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2022 at 10:54 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `is207`
--

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `MaDM` char(6) COLLATE utf8_vietnamese_ci NOT NULL,
  `TenDM` varchar(40) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`MaDM`, `TenDM`) VALUES
('DMCT01', 'Công trình'),
('DMDGNT', 'Đồ gỗ ngoài trời'),
('DMPA01', 'Phòng ăn'),
('DMPK01', 'Phòng khách'),
('DMPLV0', 'Phòng làm việc'),
('DMPN01', 'Phòng ngủ');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `MaDH` char(6) COLLATE utf8_vietnamese_ci NOT NULL,
  `MaKH` char(6) COLLATE utf8_vietnamese_ci NOT NULL,
  `MaSP` char(6) COLLATE utf8_vietnamese_ci NOT NULL,
  `Soluong` tinyint(1) NOT NULL,
  `NgDH` date DEFAULT NULL,
  `Magg` char(6) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Thtien` varchar(20) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `TinhtrangDH` varchar(20) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `donhang`
--

INSERT INTO `donhang` (`MaDH`, `MaKH`, `MaSP`, `Soluong`, `NgDH`, `Magg`, `Thtien`, `TinhtrangDH`) VALUES
('DH0001', 'KH0001', 'PASP01', 1, '2022-12-12', NULL, '37752000', 'Đang giao'),
('DH0002', 'KH0002', 'PLVSP1', 1, '2022-12-22', 'GIAM15', '13200000', 'Đang giao'),
('DH0003', 'KH0002', 'PASP03', 4, '2022-12-23', NULL, '10000000', 'Đang giao'),
('DH0004', 'KH0002', 'PASP04', 1, '2022-09-13', NULL, '4752000', 'Giao thành công'),
('DH0005', 'KH0003', 'PLVSP3', 1, '2021-08-19', NULL, '4500000', 'Giao thành công'),
('DH0006', 'KH0003', 'CTSP01', 1, '2022-11-29', 'GIAM15', '6900000', 'Giao thành công'),
('DH0007', 'KH0003', 'DGNT03', 8, '2022-10-26', NULL, '10400000', 'Giao thành công'),
('DH0008', 'KH0001', 'PNSP02', 1, '2022-12-24', 'GIAM1M', '4990000', 'Chờ thanh toán'),
('DH0009', 'KH0001', 'PNSP04', 1, '2022-12-24', 'GIAM2M', '12900000', 'Chờ thanh toán'),
('DH0010', 'KH0001', 'CTSP03', 1, '2022-01-19', 'GIAM2M', '2998000', 'Đã hủy'),
('DH0011', 'KH0002', 'PKSP01', 2, '2022-01-05', NULL, '19600000', 'Giao thành công'),
('DH0012', 'KH0003', 'DGNT01', 1, '2022-12-21', NULL, '10660000', 'Đang giao'),
('DH0013', 'KH0003', 'PASP01', 1, '2022-12-21', 'GIAM2M', '37552000', 'Đang giao'),
('DH0014', 'KH0001', 'PASP04', 2, '2022-12-14', 'GIAM15', '8,004,000', 'Chờ thanh toán'),
('DH0015', 'KH0001', 'PNSP03', 2, '2022-12-14', NULL, '17600000', 'Đã hủy');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `MaKH` char(6) COLLATE utf8_vietnamese_ci NOT NULL,
  `Ten` varchar(40) COLLATE utf8_vietnamese_ci NOT NULL,
  `Gioitinh` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `SDT` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `Ngaysinh` date NOT NULL,
  `NgayDK` date NOT NULL,
  `Email` varchar(40) COLLATE utf8_vietnamese_ci NOT NULL,
  `Tentaikhoan` varchar(40) COLLATE utf8_vietnamese_ci NOT NULL,
  `Tinhtrang` tinyint(1) NOT NULL,
  `Pass` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `Diachi` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`MaKH`, `Ten`, `Gioitinh`, `SDT`, `Ngaysinh`, `NgayDK`, `Email`, `Tentaikhoan`, `Tinhtrang`, `Pass`, `Diachi`) VALUES
('KH0001', 'Nguyễn Văn A', 'Nam', '0915246387', '2001-05-12', '2020-12-09', 'nguyenvana@gmail.com', 'nguyenvana', 1, 'nguyenvana', 'KTX khu A ĐHQG, TP.HCM'),
('KH0002', 'Lê Thị Thu Huyền', 'Nữ', '0912316387', '1998-05-14', '2021-12-08', 'lethithuhuyen@gmail.com', 'lethithuhuyen', 1, 'lethithuhuyen', 'KTX khu B ĐHQG, TP.HCM'),
('KH0003', 'Phạm Minh Trường', 'Nam', '0925461285', '2002-07-18', '2022-08-23', 'minhtruong@gmail.com', 'minhtruong', 0, 'minhtruong', 'KTX khu B ĐHQG, TP.HCM'),
('KH0004', 'Phạm Ngọc Lan Anh', 'Nữ', '0945621378', '2002-04-09', '2022-03-08', 'lananh@gmail.com', 'lananh', 0, 'lananh', 'KTX khu A ĐHQG, TP.HCM'),
('KH0005', 'Trần Hữu Trí', 'Nam', '0891235469', '1997-04-10', '2021-12-22', 'huutri@gmail.com', 'huutri', 0, 'huutri', 'KTX khu A ĐHQG, TP.HCM');

-- --------------------------------------------------------

--
-- Table structure for table `magiamgia`
--

CREATE TABLE `magiamgia` (
  `MaGG` char(6) COLLATE utf8_vietnamese_ci NOT NULL,
  `Ngayhh` date DEFAULT NULL,
  `SL` smallint(5) DEFAULT NULL,
  `Giatri` int(4) DEFAULT NULL,
  `Adung` varchar(10) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `magiamgia`
--

INSERT INTO `magiamgia` (`MaGG`, `Ngayhh`, `SL`, `Giatri`, `Adung`) VALUES
('GIAM15', '2022-12-30', 6, 15000, '5500000'),
('GIAM1M', '2022-12-30', 15, 1000000, '5000000'),
('GIAM2M', '2022-12-30', 5, 2000000, '6990000');

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `MaNV` varchar(6) COLLATE utf8_vietnamese_ci NOT NULL,
  `Ten` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Gioitinh` varchar(5) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `AnhDaiDien` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `SDT` varchar(20) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Ngaysinh` date DEFAULT NULL,
  `Diachi` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `NgayVL` date DEFAULT NULL,
  `Email` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Chucvu` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`MaNV`, `Ten`, `Gioitinh`, `AnhDaiDien`, `SDT`, `Ngaysinh`, `Diachi`, `NgayVL`, `Email`, `Chucvu`) VALUES
('NV003', 'Trần Thị C', 'Nữ', 'c.jpg', '0459735816', '1998-03-12', '29 Phú Châu, Tam Phú, thành phố Thủ Đức, Thành phố Hồ Chí Minh', '2021-06-15', 'ttc@gmail.com', 'Quản kho'),
('NV01', 'Nguyễn Văn A', 'Nam', 'a.jpg', '0459735816', '2001-02-11', '150 Đường Trần Não, P. Bình An, Quận 2, Thành phố Hồ Chí Minh', '2022-12-07', 'nva@gmail.com', 'Dịch vụ'),
('NV02', 'Lê Văn B', 'Nam', 'b.jpg', '0465891332', '1995-03-11', '1 Bùi Công Trừng, Đông Thạnh, Hóc Môn, Thành phố Hồ Chí Minh', '2021-01-12', 'lvb@gmail.com', 'Tư vấn');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` char(6) COLLATE utf8_vietnamese_ci NOT NULL,
  `TenSP` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Xuatxu` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Slcon` varchar(4) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Gia` varchar(20) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `MaDM` char(6) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `AnhSP` varchar(100) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `Mota` varchar(10000) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `TenSP`, `Xuatxu`, `Slcon`, `Gia`, `MaDM`, `AnhSP`, `Mota`) VALUES
('CTSP01', 'Thiết Kế Nội Thất Căn Hộ Picity High Park Hiện Đại', 'VN', '5', '1000000000', 'DMCT01', 'CT_SP1.jpg', 'Tên dự án: Picity High Park\r\nPhong cách: Modern\r\nLoại hình căn hộ: 1 Phòng ngủ\r\nLoại công trình: Chung cư\r\nChủ đầu tư: Pi Group\r\nKiến trúc sư: Qi Concept'),
('CTSP02', ' Thiết Kế Nội Thất Bcons Plaza Cho Gia Đình Trẻ', 'VN', '1', '1500000000', 'DMCT01', 'CT_SP2.jpg', 'Tên dự án: Bcons Plaza\r\nPhong cách: Minimalism, Modern\r\nLoại công trình: Chung cư\r\nChủ đầu tư: Bcons Group\r\nKiến trúc sư: Qi Concept'),
('CTSP03', 'Dự án Coffee Shop Classic', 'VN', '1', '2000000000', 'DMCT01', 'CT_SP3.jpg', 'Đây là dự án Coffee Shop Classic mang phong cách Châu Âu bán cổ điển đầy sang trọng và tinh tế.'),
('DGNT01', 'Xích đu mái gỗ (gỗ dầu)', 'VN', '50', '10660000', 'DMDGNT', 'DGNT_SP1.jpg', 'Chất liệu: 100% Gỗ dầu (loại gỗ tốt nhất cho các sản phẩm ngoài trời).\r\nKích thước: D1700 x R1250 x C1950\r\nMặt ngồi: D1300 x R470 x C630'),
('DGNT02', 'Bàn gỗ chữ nhật', 'VN', '45', '4300000', 'DMDGNT', 'DGNT_SP2.jpg', '\r\nChất liệu: Gỗ dầu\r\nKích thước: 1500 x 900 x 720 (mm)\r\nXuất xứ (NSX): Việt Nam\r\nMàu sắc: Tự nhiên\r\nBảo hành: 06 (tháng)'),
('DGNT03', 'Ghế xếp có tay', 'VN', '80', '1300000', 'DMDGNT', 'DGNT_SP3.jpg', '\r\nChất liệu:Gô Dầu\r\nKích thước: 575 x 610 x 440-880 (mm)\r\nXuất xứ (NSX): Việt Nam\r\nMàu sắc: Tự nhiên\r\nBảo hành: 06 (tháng)'),
('DGNT04', 'Bàn liền ghế có tựa', 'VN', '0', '4500000', 'DMPK01', 'DGNT_SP4.jpg', 'Chất liệu: 100% Gỗ Dầu \r\nKích thước: D1500 x R580 x C415/825 \r\nXuất xứ (NSX): Việt Nam \r\nMàu sắc: Tự nhiên \r\nBảo hành: 06 (tháng) '),
('PASP01', 'Bộ Bàn Ăn DI-678 + 6 Ghế CHR-625', 'Hong Kong', '40', '37752000', 'DMPA01', 'PA_SP1.jpg', 'Thiết kế thon dài sang trọng, kích thước rộng rãi phù hợp không gian vừa và lớn\r\n\r\nBàn ăn cấu tạo từ đá cẩm thạch tự nhiên nguyên khối, được phủ lớp chống thấm ẩm và lớp sơn mài bóng gương để vừa đảm bảo độ bền và tuổi thọ của sản phẩm\r\n\r\nThiết kế hiện đại, các góc bàn được bo tròn tinh tế, chiều dài bàn là 2m có thể kết hợp với 6 ghế đi kèm\r\n\r\nMẫu mã độc quyền, nhập khẩu từ công ty Hongkong đặt nhà máy tại Trung Quốc.\r\n\r\nKết hợp vừa vặn với 6 ghế ngồi, đặc biệt hoàn hảo với ghế DUNDEE'),
('PASP02', 'Ghế ăn Andrew', 'VN', '60', '3200000', 'DMPA01', 'PA_SP2.jpg', 'Chiều cao 90 cm\r\nChiều dài 46 cm\r\nChiều rộng 57.5 cm'),
('PASP03', 'Ghế ăn GENOA', 'VN', '60', '2500000', 'DMPA01', 'PA_SP3.jpg', 'Chiều cao 82 cm\r\nChiều dài 51 cm\r\nChiều rộng 61 cm'),
('PASP04', 'Bàn ăn ICON', 'VN', '30', '4752000', 'DMPA01', 'PA_SP4.jpg', 'Chiều cao 75 cm\r\nChiều dài 90 cm\r\nChiều rộng 90 cm'),
('PKSP01', 'Sofa bằng da cao cấp', 'VN', '0', '9800000', 'DMPK01', 'PK_SP1.jpg', 'Kích thước : 2m2(hoặc đặt theo kích thước nhà bạn)\r\nChất liệu : Vải bố nhập khẩu Malaysia\r\nKhung ghế : Khung gỗ dầu tự nhiên chống mối mọt (qua quy trình sấy hiện đại 72H)\r\nNệm mút : mouse D40  không xẹp lún độ bền trên 10 năm (có tùy chọn lò xo trợ nhún)\r\nChân ghế : Chân theo bộ\r\nTính năng nổi bật: Chất liệu không bám bụi, dễ lau chùi.\r\nSản xuất: Việt Nam Thương hiệu Kim Phú\r\nBảo hành: 5 Năm (Khung không gãy đổ mối mọt và Nệm mút không xẹp lún 1 đổi 1 mới chính hãng)'),
('PKSP02', 'Bàn oval mặt đá', 'VN', '35', '3500000', 'DMPK01', 'PK_SP2.jpg', '► Kích thước : 1m1 x 50cm (hoặc đặt theo kích thước nhà bạn)\r\n\r\n► Chất liệu : Đá Cramic đen\r\n\r\n► Khung ghế : Khung sắt sơn tỉnh điện chống rỉ sét\r\n\r\n► Tính năng nổi bật: Chất liệu không bám bụi, dễ lau chùi.\r\n\r\n► Sản xuất: Việt Nam Thương hiệu Kim Phú.'),
('PKSP03', 'Bàn đá đôi cao cấp', 'VN', '40', '3500000', 'DMPK01', 'PK_SP3.jpg', '► Kích thước : 60cm – 40cm (hoặc đặt theo kích thước nhà bạn)\r\n\r\n► Chất liệu : Đá Cramic đen\r\n\r\n► Khung ghế : Khung sắt sơn tỉnh điện chống rỉ sét\r\n\r\n► Tính năng nổi bật: Chất liệu không bám bụi, dễ lau chùi.\r\n\r\n► Sản xuất: Việt Nam Thương hiệu Kim Phú.'),
('PKSP04', 'Sofa phòng khách da bò Ý chính hãng', 'Ý', '20', '45800000', 'DMPK01', 'PK_SP4.jpg', 'Kích thước : Chiều dài : Băng dài kích thước 2m, ghế đơn 1m2 (Luôn luôn: Có đặt theo kích thước yêu cầu)\r\nChất liệu : Da Bò Ý Nhập Khẩu\r\nSản xuất: Thương hiệu Kim Phú (Sản phẩm xuất khẩu quốc tế)\r\nBảo hành: 5 Năm Khung Sườn 5 Năm Nệm Mousse (Khung không gãy đổ mối mọt và Nệm mút không lỗi 1 đổi 1 mới chính hãng)'),
('PLVSP1', 'Tủ Kệ Tài Liệu Và Trang Trí Văn Phòng ', 'VN', '20', '2650000', 'DMPLV0', 'PLV_SP1.jpg', 'Chất liệu : gỗ công nghiệp\r\nKích thước:  Cao: 200cm – rộng: 80cm – sâu 33cm\r\nMàu sắc:  Vàng sáng, chân sắt trắng hoặc đen\r\nNhận đặt hàng theo yêu cầu của khách'),
('PLVSP2', 'Bàn Họp Hệ Không Gian Cone Space', 'Hàn Quốc', '35', '4000000', 'DMPLV0', 'PLV_SP2.jpg', 'Kích thước: 2000x900x750 (mm) (*Kích thước có thể thay đổi theo yêu cầu).\r\n*Sản phẩm chưa bao gồm ghế\r\nMàu sắc: đa dạng (Quý khách lựa chọn theo bảng màu)\r\nChất liệu:\r\n   Chân: Thép sơn tĩnh điện.\r\n   Mặt bàn: MDF phủ melamine.\r\nBảo hành: 12 tháng'),
('PLVSP3', 'Tủ hồ sơ', 'Hàn Quốc', '30', '4500000', 'DMCT01', 'PLV_SP3.jpg', 'Thương hiệu: toanmanh.com\r\n\r\nSKU: THS421– Kích thước : Dài: 2m x sâu 38cm x Cao:2m\r\n\r\nChất liệu: MDF phủ melamine chống ẩm, chống xước, chống bám bụi. Cam kết chất lượng tốt nhất. Thị trường rẻ hơn hoàn tiền vì chúng tôi sản xuất trực tiếp\r\n\r\nBảo hành: 12 tháng'),
('PLVSP4', 'Bàn giám đốc DOCHI', 'Trung Quốc', '50', '7900000', 'DMPLV0', 'PLV_SP4.jpg', 'Kích thước: Bàn 700mmx1600mm cao 750mm\r\nChất liệu: gỗ MDF phủ Melamine\r\nThương hiệu: DOCHI OFFICE\r\nBảo hành: 12 tháng'),
('PNSP01', 'Tủ quần áo', 'VN', '60', '13200000', 'DMPN01', 'PN_SP1.jpg', 'Kích thước mẫu: D2400xR550xC2000 (mm) (kích thước có thể thay đổi theo yêu cầu)\r\nĐộ bền đảm bảo, có thể sử dụng đến 10 năm;\r\nChia ngăn đợt, móc áo, móc quần, áo dài, hộc kéo… tùy theo nhu cầu sử dụng.\r\nMàu sắc: đa dạng (Quý khách lựa chọn theo bảng màu).\r\nPhụ kiện:\r\nBản lề giảm chấn đóng cửa tủ êm nhẹ;\r\nRay hộc kéo 2 tầng êm nhẹ;\r\nMóc áo nhôm hình oval.\r\nTay nắm thời trang\r\nChất liệu:\r\nGỗ: MDF phủ melamine cao cấp, chống trầy xước, đảm bảo độ bền, tăng khả năng chịu lực, kháng mối mọt, chống cong vênh\r\nBảo hành: 12 tháng.'),
('PNSP02', 'Giường ngủ gỗ tràm', 'VN', '50', '5990000', 'DMPN01', 'PN_SP2.jpg', 'Kích thước phủ bì: Dài 212cm x Rộng 136/176/196cm x Cao đến đầu giường 92cm\r\n\r\nChất liệu:\r\n\r\n- Thân giường: Gỗ tràm tự nhiên, Veneer gỗ tràm tự nhiên\r\n\r\n- Chân giường: Gỗ thông tự nhiên\r\n\r\n- Tấm phản: Gỗ plywood chuẩn CARB-P2 (*)\r\n\r\n(*) Tiêu chuẩn California Air Resources Board xuất khẩu Mỹ, đảm bảo gỗ không độc hại, an toàn cho sức khỏe\r\n\r\nChống thấm, cong vênh, trầy xước, mối mọt'),
('PNSP03', 'Giường ngủ đẹp viền vàng Pula', 'VN', '55', '17600000', 'DMPN01', 'PN_SP3.jpg', ' Phong cách : Hiện đại Italia\r\n\r\n- Viền vàng\r\n\r\n- Mặt giường chất liệu da Hàn. Có thể đặt chất liệu da Carola/ Da bò Ý/ Vải Nỉ/ Vải Nhung/... theo yêu cầu\r\n\r\n- Viền đệm mút Việt Nhật\r\n\r\n- Kích thước lọt đệm : 160CM ( Rộng) x 200CM ( Dài) \r\n\r\n- Kích thước phủ bì : + (10 - 15)CM mỗi chiều. Có làm theo chính xác nếu cần đặt góc hẹp\r\n\r\nGiá bán với viền sơn vàng cao cấp : 8.600.000 VNĐ'),
('PNSP04', 'Sofa giường gỗ sồi', 'VN', '50', '14900000', 'DMPN01', 'PN_SP4.jpg', 'Màu sắc: Nệm xám, gỗ vân tự nhiên.\r\nChất liệu: Làm từ gỗ sồi tự nhiên 100% hàng chuẩn loại 1\r\nModel:zSOFA.vn design\r\nKích thước: 2,28 m x 0,7 m kéo thành giường 2,28 x 1,3 m\r\nXuất xứ:	Việt Nam\r\nThời hạn bảo hành: khung gỗ 3 năm, nệm mousse  và ray kéo 1 năm. Theo chính sách bảo hành của Zsofa Kiểm tra bảo hành online.\r\nTrọng lượng: 100 kg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`MaDM`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`MaDH`),
  ADD KEY `fk01_DH` (`MaKH`),
  ADD KEY `fk_dh_magg` (`Magg`),
  ADD KEY `fk_dg_sp` (`MaSP`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MaKH`);

--
-- Indexes for table `magiamgia`
--
ALTER TABLE `magiamgia`
  ADD PRIMARY KEY (`MaGG`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`MaNV`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `fk01_SP` (`MaDM`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `fk01_DH` FOREIGN KEY (`MaKH`) REFERENCES `khachhang` (`MaKH`),
  ADD CONSTRAINT `fk_dg_sp` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`),
  ADD CONSTRAINT `fk_dh_magg` FOREIGN KEY (`Magg`) REFERENCES `magiamgia` (`MaGG`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk01_SP` FOREIGN KEY (`MaDM`) REFERENCES `danhmuc` (`MaDM`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
