# Kahoot-UET

## Quy tắc chung.

### A. Git
1. Code<br>
- `Mỗi một chức năng, thao tác thì tạo branch riêng để phát triển độc lập. Tránh conflict code`<br>
- `Trước khi code thì fetch -> merge code (hoặc pull) - khuyến khích fetch - merge`

2. Commit
- `Commit có nghĩa để tiện revert `
- `Đang code dở mà phải sang branch khác thì nên dùng "git rebase" `
3. Push
- `Trước khi push thì luôn pull (fetch - merge) code`
- `Chỉ được push trên các nhánh được chỉ định. Các branch nhà nhánh của branch develop`
- <b>`Tuyệt đối không được push thằng lên origin master`

4. Merge
- `Người được giao nhiệm vụ sẽ thực hiện meger code branch vào branch lớm hơn (develop, master)`
- `Phải tạo merge request cho người thưc hiện merge`

### B. Cấu trúc thư mục
1. Backend

2. Frontend
- `Thư mục lưu source code frontend ./kahoot-uet/app/frontend/`