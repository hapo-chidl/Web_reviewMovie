CREATE TABLE comments (

  cmt_id int IDENTITY(1,1) primary key,
 cmt_name nvarchar(100) ,
  cmt_avater varchar(50) ,
  cmt_body ntext ,
  cmt_date datetime, 
  IdMovie int,
  IdUser int,
  foreign key ([IdMovie]) references [Movie]([IdMovie]),
  foreign key ([IdUser]) references [User_]([IdUser]),
) 


INSERT INTO comments (IdUser,IdMovie,cmt_name,cmt_avater, cmt_body, cmt_date) 
Values ('1','1','chi','image\boy','noi dung','20:15:00')



Create Table Admin
(
IdAdmin int IDENTITY(1,1) primary key,
UsernameAdmin char(30),
PassAdmin varchar(6),
)

Insert into Admin (UsernameAdmin,PassAdmin)
Values 
('admin','1234'),
('linhchi','123'),
('admin','admin')


DROP Table User_

Create Table quanliphim(
IdAdmin int,
IdMovie int,
Primary key ([IdMovie],[IdAdmin]),
foreign key ([IdMovie]) references [Movie]([IdMovie]),
foreign key ([IdAdmin]) references [Admin]([IdAdmin])
)

Create Table User_
(
IdUser int IDENTITY(1,1) primary key,
UsernameUser char(30),
PassUser varchar(6),
FullName nchar(30),
Email char(20),
)
Insert into User_(UsernameUser,PassUser,FullName,Email)
Values 
('linhchi','123','Dang Linh Chi','linhchi@gmail.com'),
('thanhtu','abc','Thanh Tu','1@gmail.com'),
('yenvy','456','Dang Yen Vy','34@gmail.com')

Create Table Movie
(
IdMovie int IDENTITY(1,1) primary key,
TenPhim nchar (60),
TheLoai ntext,
QuocGia nchar(40),
Noidung ntext,
link ntext,
link1 ntext,
)
Insert Into Movie(TenPhim,TheLoai,QuocGia,Noidung,link, link1)
Values (N'Ngôi làng hạnh phúc',N'Phim viễn tưởng, Phim phiêu lưu, Phim hài hước, Phim gia đình, Phim hoạt hình, Phim chiếu rạp, Phim thuyết minh, Phim lẻ',N'Nga',N'Bob là chú hải ly có cuộc sống rập khuôn hơn bao người bạn khác trong rừng. Cuộc sống của Bob vốn bình dị cho đến khi chú mèo Max xuất hiện. Khác với Bob, Max là chú mèo tràn đầy năng, luôn mơ ước một ngày mình là người nổi tiếng khắp thế giới. Kể từ ngày Max xuất hiện, cuộc sống Bob như bị đảo ngược.','images/anh1.jpg','images/anh1.1.jpg'),
(N'Giải mã bí ẩn ngân hà',N'Phim viễn tưởng, Phim phiêu lưu, Phim hồi hộp-Gây cấn, Phim Bí ẩn-Siêu nhiên, Phim chính kịch - Drama, Phim chiếu rạp, Phim thuyết minh, Phim lẻ',N'Trung Quốc- Mỹ ', N'Ad Astra là câu chuyện viễn tưởng về phi hành gia Roy McBride (Brad Pitt) và hành trình đến rìa Hệ Mặt Trời để tìm người cha mất tích. Tại đây, Roy khám phá mối hiểm họa đe dọa sự tồn vong của nhân loại. Tác phẩm mới của đạo diễn James Gray thu hút nhờ cốt truyện hấp dẫn và sự tham gia của tài tử Brad Pitt trong vai chính. Bên cạnh đó, phim cũng hứa hẹn mang đến những trải nghiệm choáng ngợp về mặt thị giác - được phụ trách bởi Hoyte Van Hoytema, đạo diễn hình ảnh từng gây tiếng vang với Interstellar.','images/anh2.jpg','images/anh2.1.jpg'),
(N'Câu chuyện đồ chơi 4', N'Phim viễn tưởng, Phim phiêu lưu, Phim hài hước, Phim gia đình, Phim hoạt hình, Phim chiếu rạp, Phim thuyết minh, Phim lẻ',N'Mỹ',N'Sự trở lại rất hào hứng của dàn đồ chơi quen thuộc như Woody, Buzz Lightyear, Jessie... cùng hai nhân vật mới sẽ xuất hiện trong Toy Story4: Ducky và Bunny!','images/anh4.jpg','images/anh4.1.jpg'),
(N'Tu viện kinh hoàng',N'Phim kinh dị, Phim chiếu rạp, Phim lẻ', N'Mỹ', N'Khi Mary mang trong bụng đứa con của mình, cũng là lúc cô tuyệt vọng nhất: phải bỏ lại người bạn trai không đủ khả năng để lập gia đình, bị xã hội khinh miệt và cô không có gì ngoài nghề lừa đảo. Mary tìm đến một tu viện bí ẩn, nơi có những ma sơ dang rộng vòng tay chào đón cô với câu nói: “chúng tôi chăm sóc những phụ nữ như cô”.
Mary không hề ngờ rằng, ẩn sau những nụ cười thánh thiện đó là những bí mật kinh hoàng của những người phụ nữ mượn danh tôn giáo để thực hiện điều sai trái. Cùng với các thai phụ khác trong tu viện, Mary phải làm mọi cách để thoát ra để bảo vệ đứa con sắp chào đời của mình. Liệu Mary có thành công?','images/anh5.jpg','images/anh5.1.jpg'),
(N'Hành trình của chú chó Bally',N'Phim phiêu lưu, Phim gia đình, Phim chiếu rạp, Phim lẻ',N'Mỹ',N'Đây là phần 2  bộ phim A Dog’s Purpose
Trong phần này, bộ phim sẽ xoay quanh cuộc sống khi về già của Ethan và Hannah cùng cháu gái CJ.
Không may, mẹ của CJ lại quyết định dẫn cô bé lên thành phố sống và điều này đồng nghĩa với việc cô bé sẽ phải xa ông bà của mình. Bailey sẽ hoá kiếp cả chục lần để có thể đi theo và bảo vệ cô chủ CJ của mình. Liệu CJ có đủ tinh tế để nhận ra đây chính là chú chó Bailey yêu dấu? Liệu cô bé có được gặp lại ông bà của mình? Hãy cùng khám phá chuyến hành trình xịn xò nhất của chú cún Bailey qua A Dog’s Journey.','images/anh6.jpg','images/anh6.1.jpg'),
(N'Đội bóng chuyền nữ',N'Phim hài hước, Phim chiếu rạp, Phim thuyết minh, Phim lẻ',N'Mỹ, Pháp',N'Đội bóng chuyền nữ The Fancols trên đường đi ngang một khu rừng hẻo lánh thì xe họ bị hỏng, tại đây họ phải đối mặt với một nhóm kẻ sát nhân bệnh hoạn được gọi là thợ săn người','images/anh7.jpg','images/anh7.1.jpg'),
(N'Đàn ông song tử',N'Phim hành động, Phim viễn tưởng, Phim hồi hộp-Gây cấn, Phim chính kịch - Drama, Phim chiếu rạp, Phim thuyết minh, Phim lẻ',N'Trung Quốc- Mỹ',N'Câu chuyện về tên sát thủ già Henry Brogen đang sắp sửa “xuống tay gác kiếm” thì đột nhiên bị truy sát bởi một người lạ bí ẩn. Đặc biệt hơn khi kẻ đang săn lùng anh dường như có khả năng phán đoán ra mọi đường đi nước bước của Henry. Trải qua quá trình điều tra, Henry Brogan phát hiện ra rằng sát thủ được cử tới chính là phiên bản nhân bản vô tính của anh cách đây 25 năm về trước.','images/anh8.jpg','images/anh8.1.jpg'),
(N'Chuyến bay sinh tử',N'Phim hành động, Phim hồi hộp-Gây cấn, Phim lẻ',N'Trung Quốc',N'Khi tổ máy bay của chuyến bay Tứ Xuyên 3U8633 đang chấp hành nhiệm vụ bỗng nhiên kính chắn gió ở khoang lái phụ bị nứt, xảy ra tình hình nguy hiểm giảm áp hiếm thấy. Cơ trưởng dựa vào ý chí, nghị lực của mình để đưa máy bay thoát khỏi hiểm cảnh, bảo đảm sự an toàn cho hành khách trên máy bay, tạo ra kỳ tích trong lịch sử hàng không dân dụng thế giới.','images/anh9.jpg','images/anh9.1.jpg'),
(N'Hoàng tử giáng sinh ', N'Phim tình cảm-Lãng mạn, Phim chính kịch - Drama, Phim thuyết minh, Phim lẻ',N'Mỹ',N'A Christmas Prince: The Royal Wedding tiếp nối câu chuyện phần trước kể về một năm sau khi giúp Hoàng tử Richard lên ngôi, cô nữ phóng viên Amber sắp trở thành vợ của chàng. Nhưng cô ấy thực sự làm được nữ hoàng?','images/anh10.jpg','images/anh10.1.jpg')




Create Table Director
(
IdDirector  int IDENTITY(1,1) primary key,
FullName nchar(50) Default 'Chua biet',
Birthday date Default '1000-10-15',
GiaiThuong nchar (30) Default 'Chua biet',
QuocGia nchar (20) default 'chua biet' ,
linkDD char (100),
)
Insert into Director(FullName,linkDD)
values (N'JOHN SCHULTZ','images/DaoDien/anh1.jpg'),
(N'VICTOR AZEEV','images/DaoDien/anh2.jpg'),
(N'JAMES GRAY','images/DaoDien/anh3.jpg'),
(N'Jame Misth','images/DaoDien/anh4.jpg'),
(N'Alexx','images/DaoDien/anh5.jpg'),
(N'Misthy','images/DaoDien/anh6.jpg'),
(N'Lodinn','images/DaoDien/anh7.jpg')



Create Table DienVien
(
IdDienVien  int IDENTITY(1,1) primary key,
FullNameDV nchar(50) ,
QuocGia nchar(20) Default 'Chua biet',
GiaiThuong nchar(50) Default 'Chua biet',
Birthday date Default '1000-12-10',
linkDV char(50),
)
Insert into DienVien(FullNameDV, linkDV)
Values 
(N'YEN-TSO CHEN','images/DienVien/anh1.jpg'),
(N'HSIAO-CHUAN CHANG','images/DienVien/anh2.jpg'),
(N'Brad Pitt','images/DienVien/anh3.jpg'),
(N'Ruth Negga','images/DienVien/anh4.jpg'),
(N'Tommy Lee','images/DienVien/anh5.jpg'),
(N'Tom Hanks','images/DienVien/anh6.jpg'),
('Tim Allen','images/DienVien/anh7.jpg'),
('CAROLYN HENNESY','images/DienVien/anh8.jpg'),
('COURTNEY HALVERSON','images/DienVien/anh9.jpg'),
('DANY VERISSIMO-PETIT','images/DienVien/anh10.jpg'),
('GUILLAUME CANET','images/DienVien/anh11.jpg'),
('WILL SMITH','images/DienVien/anh12.jpg'),
('MARY ELIZABETH WINSTEAD','images/DienVien/anh13.jpg')


Create Table NhaSanXuat
( 
IdNSX int IDENTITY(1,1),
TenNSX char(100),
IdMovie int ,
Primary key ([IdMovie],[IdNSX]),
foreign key ([IdMovie]) references [Movie]([IdMovie]),

)
insert into NhaSanXuat(TenNSX,IdMovie)
Values (N'1 Production Film, In Entertainment','1'),
('New Regency Pictures, Bona Film Group, Keep Your Head', '2'),
('Pixar Animation Studios, Walt Disney', '3'),
('Dragon Blood Holdings, St. Agatha, The Outside Writers', '4'),
('C4 Productions, Noodles Production, Volcano Films', '5'),
('Skydance Media, Jerry Bruckheimer Films, Fosun Group Forever Pictures', '6')

Create Table DaoDien
(
IdDirector int ,
IdMovie int,
Primary key ([IdMovie],[IdDirector]),
foreign key ([IdMovie]) references [Movie]([IdMovie]),
foreign key ([IdDirector]) references [Director]([IdDirector])
)
Insert into DaoDien
Values ('3', '2'),
('2', '1'),
('1','3'),
('4','4'),
('5','5'),
('6','6'),
('7','7')

Create Table DongPhim
(
IdMovie int,
IdDienVien int,
Primary key ([IdMovie],[IdDienVien]),
foreign key ([IdMovie]) references [Movie]([IdMovie]),
foreign key ([IdDienVien]) references [DienVien]([IdDienVien])
)
insert Into DongPhim(IdMovie,IdDienVien)
Values ('1','1'),
('1','2'),
('2','3'),
('2','4'),
('3','5'),
('3','6'),
('4','7'),
('5','8'),
('6','9')

select *from DienVien,DaoDien,Movie,DongPhim,Director, NhaSanXuat
where
DongPhim.IdMovie=Movie.IdMovie
and NhaSanXuat.IdMovie=Movie.IdMovie
and DongPhim.IdDienVien=DienVien.IdDienVien
and DaoDien.IdDirector=Director.IdDirector
and DaoDien.IdMovie=Movie.IdMovie
and Movie.IdMovie like '%3%';

( select  distinct Movie.IdMovie from DienVien,DaoDien,Movie,DongPhim,Director
where
DongPhim.IdMovie=Movie.IdMovie
and DongPhim.IdDienVien=DienVien.IdDienVien
and DaoDien.IdDirector=Director.IdDirector
and DaoDien.IdMovie=Movie.IdMovie
and (TenPhim like '%n%' 
or FullNameDV like '%n%'
or FullName like '%n%')
)


select *from Movie where IdMovie = '1'


Create Table CamNhan
(
IdCamnhan int IDENTITY(1,1),
IdUser int ,
Cam_Nhan ntext,
 TenMovie nchar(100),
primary key ([IdUser],[TenMovie],[IdCamnhan]),
foreign key ([IdUser]) references [User_]([IdUser])
)
 Insert Into CamNhan (IdUser, Cam_Nhan, TenMovie)
 Values ('2', N'Phải xem!

Bộ phim lột tả thành công sự đồng nhất giữa cái mâu thuẫn cùng cực của khoa học và cái mâu thuẫn cùng cực của tâm linh - Cái mâu thuẫn của những người mà chỉ một bước nữa thôi đã tìm ra được chân lý cuối cùng.

Để cảm nhận được cái hay của bộ phim, khán giả phải là người có trí tuệ và có nội tâm sâu sắc.

Tất nhiên, cũng có nhiều lớp ý nghĩa bình dân hơn để khán giả bình dân đỡ bị chưng hửng khi xem một bộ phim bom tấn mà chẳng hiểu cái gì.... ', N'Giải mã bí ẩn ngân hà'),
('3', N'Mary (Sabrina Kern) là cô gái trẻ đang mang thai, bỏ lại cuộc đời khốn khổ của mình ngoài xã hội (bạn trai không đủ khả năng lập gia đình, bị khinh miệt, sống bằng nghề lừa đảo). Cô chuyển đến ngôi nhà cho những “người mẹ bất đắc dĩ”, điều hành bởi các nữ tu, ẩn náu trong khu rừng mù sương. Họ chào đón Mary bằng một vòng tay rộng mở: “Ở đây, chúng tôi chăm sóc những người phụ nữ như cô.”
Mọi thứ bắt đầu trở nên kỳ lạ. Những âm thanh cào xé phát ra từ tầng trên, như thể có ai bị mắc kẹt ở đó. Các cô gái không được phép nói chuyện với nhau. Những “thứ” đáng sợ được nhìn thấy qua thanh gỗ trên tường, bên dưới cánh cửa. Khi các cô gái cư xử không đúng mực, hình phạt của Mẹ Bề trên “rất kinh khủng” (một cô gái bị bắt ăn bãi nôn mửa của mình). Một trong số họ biến mất khỏi ký túc xá xào ban đêm, không bao giờ được nhìn thấy nữa.',N'Tu viện kinh hoàng')

select *from Director,Movie,DaoDien
where
Director.IdDirector=DaoDien.IdDirector
and
DaoDien.IdMovie=Movie.IdMovie
and
DaoDien.IdDirector like '%2';

SELECT IdUser, IdMovie FROM User_, Movie WHERE UsernameUser like '%thanhtu%'  and TenPhim like '%ngôi làng %'


SELECT * FROM  Movie LIMIT 4
SELECT * FROM Movie OFFSET  3  ;
SELECT First IdMovie + ' ' + Last IdMovie FROM Movie     
ORDER BY First IdMovie OFFSET 2 ROWS FETCH NEXT 5 ROWS ONLY;  



SELECT * FROM Movie
ORDER BY IdMovie
OFFSET $start  ROWS
FETCH NEXT $limit ROWS ONLY

SELECT *FROM User_ where UsernameUser = 'linhchi'