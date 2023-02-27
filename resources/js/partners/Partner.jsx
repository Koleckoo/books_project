export default function Partner({ name, url }) {
    return (
        <div className="partner">
            <h3>
                <a href={url} target="_blank">
                    {name}
                </a>
            </h3>
        </div>
    );
}
