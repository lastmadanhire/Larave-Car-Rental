export default function ApplicationLogo(props) {
    return (
        <img
            src="/images/logo1.png" // Path to your local image
            alt="Application Logo"
            {...props}
            style={{ width: '70px', height: '70px' }} // Adjust styling as needed
        />
    );
}
