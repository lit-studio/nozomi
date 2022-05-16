export default function () {
    console.log("single blog");
    $('.blog-content-wrap p img').unwrap();
    $('.blog-content-wrap blockquote p').contents().unwrap();
}